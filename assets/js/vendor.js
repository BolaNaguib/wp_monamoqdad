"use strict";

!function (t, i, e) {
  "use strict";

  function r(t, i) {
    this.element = t, this.layers = t.getElementsByClassName("layer");
    var e = {
      calibrateX: this.data(this.element, "calibrate-x"),
      calibrateY: this.data(this.element, "calibrate-y"),
      invertX: this.data(this.element, "invert-x"),
      invertY: this.data(this.element, "invert-y"),
      limitX: this.data(this.element, "limit-x"),
      limitY: this.data(this.element, "limit-y"),
      scalarX: this.data(this.element, "scalar-x"),
      scalarY: this.data(this.element, "scalar-y"),
      frictionX: this.data(this.element, "friction-x"),
      frictionY: this.data(this.element, "friction-y"),
      originX: this.data(this.element, "origin-x"),
      originY: this.data(this.element, "origin-y"),
      pointerEvents: this.data(this.element, "pointer-events"),
      precision: this.data(this.element, "precision")
    };

    for (var o in e) {
      null === e[o] && delete e[o];
    }

    this.extend(this, a, i, e), this.calibrationTimer = null, this.calibrationFlag = !0, this.enabled = !1, this.depthsX = [], this.depthsY = [], this.raf = null, this.bounds = null, this.ex = 0, this.ey = 0, this.ew = 0, this.eh = 0, this.ecx = 0, this.ecy = 0, this.erx = 0, this.ery = 0, this.cx = 0, this.cy = 0, this.ix = 0, this.iy = 0, this.mx = 0, this.my = 0, this.vx = 0, this.vy = 0, this.onMouseMove = this.onMouseMove.bind(this), this.onDeviceOrientation = this.onDeviceOrientation.bind(this), this.onOrientationTimer = this.onOrientationTimer.bind(this), this.onCalibrationTimer = this.onCalibrationTimer.bind(this), this.onAnimationFrame = this.onAnimationFrame.bind(this), this.onWindowResize = this.onWindowResize.bind(this), this.initialise();
  }

  var o = "Parallax",
      s = 30,
      a = {
    relativeInput: !1,
    clipRelativeInput: !1,
    calibrationThreshold: 100,
    calibrationDelay: 500,
    supportDelay: 500,
    calibrateX: !1,
    calibrateY: !0,
    invertX: !0,
    invertY: !0,
    limitX: !1,
    limitY: !1,
    scalarX: 10,
    scalarY: 10,
    frictionX: 0.1,
    frictionY: 0.1,
    originX: 0.5,
    originY: 0.5,
    pointerEvents: !0,
    precision: 1
  };
  r.prototype.extend = function () {
    if (arguments.length > 1) for (var t = arguments[0], i = 1, e = arguments.length; e > i; i++) {
      var o = arguments[i];

      for (var s in o) {
        t[s] = o[s];
      }
    }
  }, r.prototype.data = function (t, i) {
    return this.deserialize(t.getAttribute("data-" + i));
  }, r.prototype.deserialize = function (t) {
    return "true" === t ? !0 : "false" === t ? !1 : "null" === t ? null : !isNaN(parseFloat(t)) && isFinite(t) ? parseFloat(t) : t;
  }, r.prototype.camelCase = function (t) {
    return t.replace(/-+(.)?/g, function (t, i) {
      return i ? i.toUpperCase() : "";
    });
  }, r.prototype.transformSupport = function (o) {
    for (var s = i.createElement("div"), a = !1, r = null, n = !1, h = null, l = null, c = 0, p = this.vendors.length; p > c; c++) {
      if (null !== this.vendors[c] ? (h = this.vendors[c][0] + "transform", l = this.vendors[c][1] + "Transform") : (h = "transform", l = "transform"), s.style[l] !== e) {
        a = !0;
        break;
      }
    }

    switch (o) {
      case "2D":
        n = a;
        break;

      case "3D":
        if (a) {
          var d = i.body || i.createElement("body"),
              u = i.documentElement,
              f = u.style.overflow,
              m = !1;
          i.body || (m = !0, u.style.overflow = "hidden", u.appendChild(d), d.style.overflow = "hidden", d.style.background = ""), d.appendChild(s), s.style[l] = "translate3d(1px,1px,1px)", r = t.getComputedStyle(s).getPropertyValue(h), n = r !== e && r.length > 0 && "none" !== r, u.style.overflow = f, d.removeChild(s), m && (d.removeAttribute("style"), d.parentNode.removeChild(d));
        }

    }

    return n;
  }, r.prototype.ww = null, r.prototype.wh = null, r.prototype.wcx = null, r.prototype.wcy = null, r.prototype.wrx = null, r.prototype.wry = null, r.prototype.portrait = null, r.prototype.desktop = !navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|BB10|mobi|tablet|opera mini|nexus 7)/i), r.prototype.vendors = [null, ["-webkit-", "webkit"], ["-moz-", "Moz"], ["-o-", "O"], ["-ms-", "ms"]], r.prototype.motionSupport = !!t.DeviceMotionEvent, r.prototype.orientationSupport = !!t.DeviceOrientationEvent, r.prototype.orientationStatus = 0, r.prototype.motionStatus = 0, r.prototype.propertyCache = {}, r.prototype.initialise = function () {
    r.prototype.transform2DSupport === e && (r.prototype.transform2DSupport = r.prototype.transformSupport("2D"), r.prototype.transform3DSupport = r.prototype.transformSupport("3D")), this.transform3DSupport && this.accelerate(this.element);
    var i = t.getComputedStyle(this.element);
    "static" === i.getPropertyValue("position") && (this.element.style.position = "relative"), this.pointerEvents || (this.element.style.pointerEvents = "none"), this.updateLayers(), this.updateDimensions(), this.enable(), this.queueCalibration(this.calibrationDelay);
  }, r.prototype.updateLayers = function () {
    this.layers = this.element.getElementsByClassName("layer"), this.depthsX = [], this.depthsY = [];

    for (var t = 0, i = this.layers.length; i > t; t++) {
      var e = this.layers[t];
      this.transform3DSupport && this.accelerate(e), e.style.position = t ? "absolute" : "relative", e.style.display = "block", e.style.left = 0, e.style.top = 0;
      var o = this.data(e, "depth") || 0;
      this.depthsX.push(this.data(e, "depth-x") || o), this.depthsY.push(this.data(e, "depth-y") || o);
    }
  }, r.prototype.updateDimensions = function () {
    this.ww = t.innerWidth, this.wh = t.innerHeight, this.wcx = this.ww * this.originX, this.wcy = this.wh * this.originY, this.wrx = Math.max(this.wcx, this.ww - this.wcx), this.wry = Math.max(this.wcy, this.wh - this.wcy);
  }, r.prototype.updateBounds = function () {
    this.bounds = this.element.getBoundingClientRect(), this.ex = this.bounds.left, this.ey = this.bounds.top, this.ew = this.bounds.width, this.eh = this.bounds.height, this.ecx = this.ew * this.originX, this.ecy = this.eh * this.originY, this.erx = Math.max(this.ecx, this.ew - this.ecx), this.ery = Math.max(this.ecy, this.eh - this.ecy);
  }, r.prototype.queueCalibration = function (t) {
    clearTimeout(this.calibrationTimer), this.calibrationTimer = setTimeout(this.onCalibrationTimer, t);
  }, r.prototype.enable = function () {
    this.enabled || (this.enabled = !0, !this.desktop && this.orientationSupport ? (this.portrait = null, t.addEventListener("deviceorientation", this.onDeviceOrientation), setTimeout(this.onOrientationTimer, this.supportDelay)) : !this.desktop && this.motionSupport ? (this.portrait = null, t.addEventListener("devicemotion", this.onDeviceMotion), setTimeout(this.onMotionTimer, this.supportDelay)) : (this.cx = 0, this.cy = 0, this.portrait = !1, t.addEventListener("mousemove", this.onMouseMove)), t.addEventListener("resize", this.onWindowResize), this.raf = requestAnimationFrame(this.onAnimationFrame));
  }, r.prototype.disable = function () {
    this.enabled && (this.enabled = !1, this.orientationSupport ? t.removeEventListener("deviceorientation", this.onDeviceOrientation) : this.motionSupport ? t.removeEventListener("devicemotion", this.onDeviceMotion) : t.removeEventListener("mousemove", this.onMouseMove), t.removeEventListener("resize", this.onWindowResize), cancelAnimationFrame(this.raf));
  }, r.prototype.calibrate = function (t, i) {
    this.calibrateX = t === e ? this.calibrateX : t, this.calibrateY = i === e ? this.calibrateY : i;
  }, r.prototype.invert = function (t, i) {
    this.invertX = t === e ? this.invertX : t, this.invertY = i === e ? this.invertY : i;
  }, r.prototype.friction = function (t, i) {
    this.frictionX = t === e ? this.frictionX : t, this.frictionY = i === e ? this.frictionY : i;
  }, r.prototype.scalar = function (t, i) {
    this.scalarX = t === e ? this.scalarX : t, this.scalarY = i === e ? this.scalarY : i;
  }, r.prototype.limit = function (t, i) {
    this.limitX = t === e ? this.limitX : t, this.limitY = i === e ? this.limitY : i;
  }, r.prototype.origin = function (t, i) {
    this.originX = t === e ? this.originX : t, this.originY = i === e ? this.originY : i;
  }, r.prototype.clamp = function (t, i, e) {
    return t = Math.max(t, i), t = Math.min(t, e);
  }, r.prototype.css = function (t, i, o) {
    var s = this.propertyCache[i];
    if (!s) for (var a = 0, r = this.vendors.length; r > a; a++) {
      if (s = null !== this.vendors[a] ? this.camelCase(this.vendors[a][1] + "-" + i) : i, t.style[s] !== e) {
        this.propertyCache[i] = s;
        break;
      }
    }
    t.style[s] = o;
  }, r.prototype.accelerate = function (t) {
    this.css(t, "transform", "translate3d(0,0,0) rotate(0.0001deg)"), this.css(t, "transform-style", "preserve-3d"), this.css(t, "backface-visibility", "hidden");
  }, r.prototype.setPosition = function (t, i, e) {
    i = i.toFixed(this.precision) + "px", e = e.toFixed(this.precision) + "px", this.transform3DSupport ? this.css(t, "transform", "translate3d(" + i + "," + e + ",0)") : this.transform2DSupport ? this.css(t, "transform", "translate(" + i + "," + e + ")") : (t.style.left = i, t.style.top = e);
  }, r.prototype.onOrientationTimer = function () {
    this.orientationSupport && 0 === this.orientationStatus && (this.disable(), this.orientationSupport = !1, this.enable());
  }, r.prototype.onMotionTimer = function () {
    this.motionSupport && 0 === this.motionStatus && (this.disable(), this.motionSupport = !1, this.enable());
  }, r.prototype.onCalibrationTimer = function () {
    this.calibrationFlag = !0;
  }, r.prototype.onWindowResize = function () {
    this.updateDimensions();
  }, r.prototype.onAnimationFrame = function () {
    this.updateBounds();
    var t = this.ix - this.cx,
        i = this.iy - this.cy;
    (Math.abs(t) > this.calibrationThreshold || Math.abs(i) > this.calibrationThreshold) && this.queueCalibration(0), this.portrait ? (this.mx = this.calibrateX ? i : this.iy, this.my = this.calibrateY ? t : this.ix) : (this.mx = this.calibrateX ? t : this.ix, this.my = this.calibrateY ? i : this.iy), this.mx *= this.ew * (this.scalarX / 100), this.my *= this.eh * (this.scalarY / 100), isNaN(parseFloat(this.limitX)) || (this.mx = this.clamp(this.mx, -this.limitX, this.limitX)), isNaN(parseFloat(this.limitY)) || (this.my = this.clamp(this.my, -this.limitY, this.limitY)), this.vx += (this.mx - this.vx) * this.frictionX, this.vy += (this.my - this.vy) * this.frictionY;

    for (var e = 0, o = this.layers.length; o > e; e++) {
      var s = this.layers[e],
          a = this.depthsX[e],
          r = this.depthsY[e],
          n = this.vx * (a * (this.invertX ? -1 : 1)),
          h = this.vy * (r * (this.invertY ? -1 : 1));
      this.setPosition(s, n, h);
    }

    this.raf = requestAnimationFrame(this.onAnimationFrame);
  }, r.prototype.rotate = function (t, i) {
    var e = (event.beta || 0) / s,
        o = (event.gamma || 0) / s,
        a = this.wh > this.ww;
    this.portrait !== a && (this.portrait = a, this.calibrationFlag = !0), this.calibrationFlag && (this.calibrationFlag = !1, this.cx = e, this.cy = o), this.ix = e, this.iy = o;
  }, r.prototype.onDeviceOrientation = function (t) {
    var i = t.beta,
        e = t.gamma;
    this.desktop || null === i || null === e || (this.orientationStatus = 1, this.rotate(i, e));
  }, r.prototype.onDeviceMotion = function (t) {
    var i = t.rotationRate.beta,
        e = t.rotationRate.gamma;
    this.desktop || null === i || null === e || (this.motionStatus = 1, this.rotate(i, e));
  }, r.prototype.onMouseMove = function (t) {
    var i = t.clientX,
        e = t.clientY;
    !this.orientationSupport && this.relativeInput ? (this.clipRelativeInput && (i = Math.max(i, this.ex), i = Math.min(i, this.ex + this.ew), e = Math.max(e, this.ey), e = Math.min(e, this.ey + this.eh)), this.ix = (i - this.ex - this.ecx) / this.erx, this.iy = (e - this.ey - this.ecy) / this.ery) : (this.ix = (i - this.wcx) / this.wrx, this.iy = (e - this.wcy) / this.wry);
  }, t[o] = r;
}(window, document);