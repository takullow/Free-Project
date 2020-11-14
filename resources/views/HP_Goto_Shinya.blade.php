<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
<meta name="GENERATOR" content="JustSystems Homepage Builder Version 16.0.10.0 for Windows">
<meta http-equiv="Content-Style-Type" content="text/css">
<TITLE>後藤新弥</TITLE>
<SCRIPT>
<!--HPB_SCRIPT_INFO_40
//HPB_VFX_EVT Element:BODY Event:OnLoad Handler:HpbVfxinit('Layer1','HpbVfx0301','G221',0,0,1); 
//HPB_VFX_PAR Element:BODY Event:OnLoad LayerID:Layer1 Entry:HpbVfx0301 Param:G221 1stDelay:0 NxtDelay:0 Loop:1 
//-->
</SCRIPT><SCRIPT language="JavaScript">
<!--HPB_SCRIPT_VFX_40
//
// Licensed Materials - Property of IBM
// 83H7391, 42L1820
// (C) Copyright IBM Corp. 1995, 1999  All Rights Reserved.
//
var layerId       =  0; var func          =  1; var effectPattern =  2; 
var startTime     =  3; var nextLayerIdx  =  4; var nextStartTime =  5; 
var intervalTime  =  6; var repeat        =  7; var endVisibility =  8;
var posX          =  9; var posY          = 10; var posStartX     = 11;
var posStartY     = 12; var posEndX       = 13; var posEndY       = 14;
var stepX         = 15; var stepY         = 16; var frame         = 17;
var accelerationX = 18; var accelerationY = 19; var angle         = 20;
var fixedX        = 21; var fixedY        = 22; 

var appVer = parseInt(navigator.appVersion);
var isNC = (document.layers && (appVer >= 4)); // Netscape Navigator 4.0 or later
var isIE = (document.all    && (appVer >= 4)); // Internet Explorer  4.0 or later
var elt;
elt = new Array;
var layerobj;
layerobj = new Array;
var lastobj;

function HpbVfxinit() {
  var w_str;
  if (isNC || isIE) {
    var n_div = arguments.length / 6;
    for (var div = 0; div < n_div; div++) {
      var args = 6 * div;
      var arg1 = arguments[args];
      var arg2 = arguments[args+1];
      var arg3 = arguments[args+2];
      var arg4 = arguments[args+3];
      var arg5 = arguments[args+4];
      var arg6 = arguments[args+5];
      elt[div] = new Array(arg1,arg2,arg3,arg4,-1,arg5,0,arg6,true,-32767,-32767,-32767,-32767,-32767,-32767,-32767,-32767,40,1.0,1.0,0,-1,-1);
  } }

  if (isNC) {
    for (i=0; i < elt.length; i++) {
      w_str = "document." + elt[i][layerId];
      layerobj[i] = eval(w_str);
      if (layerobj[i]) {
        layerobj[i].init = false;
        layerobj[i].innerH = window.innerHeight;
        layerobj[i].innerW = window.innerWidth;
        layerobj[i].pos_x = layerobj[i].left;
        layerobj[i].pos_y = layerobj[i].top;
        layerobj[i].pos_w = layerobj[i].clip.width;
        layerobj[i].pos_h = layerobj[i].clip.height;
  } } }
  if (isIE) {
    for (i=0; i < elt.length; i++) {
      w_str = "document.all.item(\"" + elt[i][layerId] + "\")";
      if (eval(w_str)) {
        w_str = "document.all.item(\"" + elt[i][layerId] + "\").style";
        layerobj[i] = eval(w_str);
        if (layerobj[i]) {
          layerobj[i].init = false;
          layerobj[i].innerH = document.body.clientHeight;
          layerobj[i].innerW = document.body.clientWidth;
          layerobj[i].pos_x = layerobj[i].pixelLeft;
          layerobj[i].pos_y = layerobj[i].pixelTop;
          layerobj[i].pos_w = layerobj[i].pixelWidth;
          layerobj[i].pos_h = layerobj[i].pixelHeight;
  } } } }

  if (isNC || isIE) {
    for (i=0; i < elt.length; i++) {
      if (layerobj[i]) {
        if (elt[i][posX] == -32767) elt[i][posX] = layerobj[i].pos_x;
        if (elt[i][posY] == -32767) elt[i][posY] = layerobj[i].pos_y;
        if (elt[i][effectPattern].charAt(0) == "A") {
          if (elt[i][posX] != -32767) elt[i][posEndX] = elt[i][posX];
          if (elt[i][posY] != -32767) elt[i][posEndY] = elt[i][posY];
          if (elt[i][effectPattern].charAt(1) == "1") {
            elt[i][posStartX] = layerobj[i].pos_w * -1;
            if (elt[i][posY] != -32767) elt[i][posStartY] = elt[i][posY];
          }
          if (elt[i][effectPattern].charAt(1) == "3") {
            if (elt[i][posX] != -32767) elt[i][posStartX] = elt[i][posX];
            elt[i][posStartY] = layerobj[i].pos_h * -1;
          }
          if (elt[i][effectPattern].charAt(1) == "5") {
            elt[i][posStartX] = layerobj[i].pos_w * -1;
            elt[i][posStartY] = layerobj[i].pos_h * -1;
          }
          if (elt[i][effectPattern].charAt(1) == "8") {
            elt[i][posStartX] = layerobj[i].pos_w * -1;
            elt[i][posStartY] = layerobj[i].innerH;
        } }
        if (elt[i][effectPattern].charAt(0) == "B") {
          if (elt[i][posX] != -32767) elt[i][posStartX] = elt[i][posX];
          if (elt[i][posY] != -32767) elt[i][posStartY] = elt[i][posY];
          if (elt[i][effectPattern].charAt(1) == "2") {
            elt[i][posEndX] = layerobj[i].pos_w * -1;
            if (elt[i][posY] != -32767) elt[i][posEndY] = elt[i][posY];
          }
          if (elt[i][effectPattern].charAt(1) == "4") {
            if (elt[i][posX] != -32767) elt[i][posEndX] = elt[i][posX];
            elt[i][posEndY] = layerobj[i].pos_h * -1;
          }
          if (elt[i][effectPattern].charAt(1) == "6") {
            elt[i][posEndX] = layerobj[i].pos_w * -1;
            elt[i][posEndY] = layerobj[i].pos_h * -1;
          }
          if (elt[i][effectPattern].charAt(1) == "7") {
            elt[i][posEndX] = layerobj[i].pos_w * -1;
            elt[i][posEndY] = layerobj[i].innerH;
        } }
        if (elt[i][effectPattern].charAt(0) == "C") {
          if (elt[i][effectPattern].charAt(1) == "2") {
            elt[i][posStartX] = layerobj[i].innerW;
            elt[i][posEndX] = layerobj[i].pos_w * -1;
            if (elt[i][posY] != -32767) {
              elt[i][posStartY] = elt[i][posY];
              elt[i][posEndY] = elt[i][posY];
            }
          }
          if (elt[i][effectPattern].charAt(1) == "1") {
            elt[i][posStartX] = layerobj[i].pos_w * -1;
            elt[i][posEndX] = layerobj[i].innerW;
            if (elt[i][posY] != -32767) {
              elt[i][posStartY] = elt[i][posY];
              elt[i][posEndY] = elt[i][posY];
            }
          }
          if (elt[i][effectPattern].charAt(1) == "3") {
            if (elt[i][posX] != -32767) {
              elt[i][posStartX] = elt[i][posX];
              elt[i][posEndX] = elt[i][posX];
            }
            elt[i][posStartY] = layerobj[i].pos_h * -1;
            elt[i][posEndY] = layerobj[i].innerH;
          }
          if (elt[i][effectPattern].charAt(1) == "4") {
            if (elt[i][posX] != -32767) {
              elt[i][posStartX] = elt[i][posX];
              elt[i][posEndX] = elt[i][posX];
            }
            elt[i][posStartY] = layerobj[i].innerH;
            elt[i][posEndY] = layerobj[i].pos_h * -1;
          }
          if (elt[i][effectPattern].charAt(1) == "7") {
            elt[i][posStartX] = layerobj[i].innerW;
            elt[i][posStartY] = layerobj[i].pos_h * -1;
            elt[i][posEndX] = layerobj[i].pos_w * -1;
            elt[i][posEndY] = layerobj[i].innerH;
          }
          if (elt[i][effectPattern].charAt(1) == "5") {
            elt[i][posStartX] = layerobj[i].pos_w * -1;
            elt[i][posStartY] = layerobj[i].pos_h * -1;
            elt[i][posEndX] = layerobj[i].innerW;
            elt[i][posEndY] = layerobj[i].innerH;
          }
          if (elt[i][effectPattern].charAt(1) == "6") {
            elt[i][posStartX] = layerobj[i].innerW;
            elt[i][posStartY] = layerobj[i].innerH;
            elt[i][posEndX] = layerobj[i].pos_w * -1;
            elt[i][posEndY] = layerobj[i].pos_h * -1;
          }
          if (elt[i][effectPattern].charAt(1) == "8") {
            elt[i][posStartX] = layerobj[i].pos_w * -1;
            elt[i][posStartY] = layerobj[i].innerH;
            elt[i][posEndX] = layerobj[i].innerW;
            elt[i][posEndY] = layerobj[i].pos_h * -1;
        } }
        if (elt[i][effectPattern].charAt(0) == "D") {
          if (elt[i][effectPattern].charAt(1) == "1") {
            elt[i][stepX] = 4;  elt[i][stepY] = 0;
          }
          if (elt[i][effectPattern].charAt(1) == "3") {
            elt[i][stepX] = 0;  elt[i][stepY] = 4;
        } }
        if (elt[i][effectPattern].charAt(0) == "F") {
          if (elt[i][effectPattern].charAt(1) == "4") {
            if (elt[i][posX] != -32767) {
              elt[i][posStartX] = elt[i][posX];
              elt[i][posEndX] = elt[i][posX] + layerobj[i].pos_w;
            }
            if (elt[i][posY] != -32767) {
              elt[i][posStartY] = elt[i][posY];
              if (elt[i][effectPattern].charAt(3) == "1") elt[i][posEndY] = elt[i][posY] + 80;
              if (elt[i][effectPattern].charAt(3) == "2") elt[i][posEndY] = elt[i][posY] + 160;
              if (elt[i][effectPattern].charAt(3) == "3") elt[i][posEndY] = elt[i][posY] + 320;
            }
            elt[i][stepX] = 0;  elt[i][stepY] = 4;
          }
          if (elt[i][effectPattern].charAt(1) == "2") {
            if (elt[i][posX] != -32767) {
              elt[i][posStartX] = elt[i][posX];
              if (elt[i][effectPattern].charAt(3) == "1") elt[i][posEndX] = elt[i][posX] + 80;
              if (elt[i][effectPattern].charAt(3) == "2") elt[i][posEndX] = elt[i][posX] + 160;
              if (elt[i][effectPattern].charAt(3) == "3") elt[i][posEndX] = elt[i][posX] + 320;
            }
            if (elt[i][posY] != -32767) {
              elt[i][posStartY] = elt[i][posY];
              elt[i][posEndY] = elt[i][posY] + layerobj[i].pos_h;
            }
            elt[i][stepX] = 4;  elt[i][stepY] = 0;
        } }
        if (elt[i][effectPattern].charAt(0) == "G") {
          if (elt[i][effectPattern].charAt(1) == "2") {
            elt[i][posStartX] = 0;
            if (elt[i][effectPattern].charAt(3) == "1") elt[i][posStartY] = 80;
            if (elt[i][effectPattern].charAt(3) == "2") elt[i][posStartY] = 160;
            if (elt[i][effectPattern].charAt(3) == "3") elt[i][posStartY] = 320;
            elt[i][posEndX] = 1;  elt[i][posEndY] = 1;
        } }
        if (elt[i][effectPattern].charAt(0) == "H") {
          if (elt[i][effectPattern].charAt(3) == "1") {
            elt[i][stepX] = 8;  elt[i][stepY] = 8;
          }
          if (elt[i][effectPattern].charAt(3) == "2") {
            elt[i][stepX] = 16;  elt[i][stepY] = 16;
          }
          if (elt[i][effectPattern].charAt(3) == "3") {
            elt[i][stepX] = 32;  elt[i][stepY] = 32;
          }
          if (elt[i][effectPattern].charAt(1) == "2") {
            elt[i][stepX] = 0;  elt[i][fixedX] = true;  elt[i][fixedY] = true;
          }
          if (elt[i][effectPattern].charAt(1) == "1") {
            elt[i][stepY] = 0;  elt[i][fixedX] = true;  elt[i][fixedY] = true;
          }
          if (elt[i][effectPattern].charAt(1) == "3") {
            elt[i][fixedX] = false;  elt[i][fixedY] = false;
        } }
        if (elt[i][effectPattern].charAt(0) == "I") {
          if (elt[i][effectPattern].charAt(3) == "1") {
            elt[i][posStartX] = 40;  elt[i][posStartY] = 40;
          }
          if (elt[i][effectPattern].charAt(3) == "2") {
            elt[i][posStartX] = 80;  elt[i][posStartY] = 80;
          }
          if (elt[i][effectPattern].charAt(3) == "3") {
            elt[i][posStartX] = 160;  elt[i][posStartY] = 160;
          }
          elt[i][posEndX] = 1;  elt[i][posEndY] = 1;  elt[i][stepX] = -32767;
          if (elt[i][effectPattern].charAt(1) == "1") {
            elt[i][posY] += elt[i][posStartY];
            elt[i][stepY] = Math.PI * 3 / 2;
            elt[i][frame] = 40;
          }
          if (elt[i][effectPattern].charAt(1) == "2") {
            elt[i][posY] -= elt[i][posStartY];
            elt[i][stepY] = Math.PI * 1 / 2;
            elt[i][frame] = 40;
          }
          if (elt[i][effectPattern].charAt(1) == "3") {
            elt[i][posX] -= elt[i][posStartX];
            elt[i][stepY] = Math.PI * 0 / 2;
            elt[i][frame] = 40;
          }
          if (elt[i][effectPattern].charAt(1) == "4") {
            elt[i][posX] += elt[i][posStartX];
            elt[i][stepY] = Math.PI * 2 / 2;
            elt[i][frame] = 40;
          }
          if (elt[i][effectPattern].charAt(1) == "5") {
            elt[i][posY] += elt[i][posStartY];
            elt[i][stepY] = Math.PI * 3 / 2;
            elt[i][frame] = -40;
          }
          if (elt[i][effectPattern].charAt(1) == "6") {
            elt[i][posY] -= elt[i][posStartY];
            elt[i][stepY] = Math.PI * 1 / 2;
            elt[i][frame] = -40;
          }
          if (elt[i][effectPattern].charAt(1) == "7") {
            elt[i][posX] -= elt[i][posStartX];
            elt[i][stepY] = Math.PI * 0 / 2;
            elt[i][frame] = -40;
          }
          if (elt[i][effectPattern].charAt(1) == "8") {
            elt[i][posX] += elt[i][posStartX];
            elt[i][stepY] = Math.PI * 2 / 2;
            elt[i][frame] = -40;
        } }
        if (elt[i][effectPattern].charAt(0) == "J") {
          if (elt[i][effectPattern].charAt(3) == "1") {
            elt[i][posStartX] = 0;  elt[i][posStartY] = 80;
          }
          if (elt[i][effectPattern].charAt(3) == "2") {
            elt[i][posStartX] = 0;  elt[i][posStartY] = 160;
          }
          if (elt[i][effectPattern].charAt(3) == "3") {
            elt[i][posStartX] = 0;  elt[i][posStartY] = 320;
          }
          elt[i][posEndX] = 1;  elt[i][posEndY] = 1;
          elt[i][stepX] = -32767;  elt[i][stepY] = 0;
          if (elt[i][effectPattern].charAt(1) == "2") {
            elt[i][accelerationY] = 0.99;  elt[i][frame] = 40;
        } }
        if (elt[i][effectPattern].charAt(0) == "K") {
          if (elt[i][effectPattern].charAt(3) == "1") {
            elt[i][posStartX] = 40;  elt[i][posStartY] = 40;
          }
          if (elt[i][effectPattern].charAt(3) == "2") {
            elt[i][posStartX] = 80;  elt[i][posStartY] = 80;
          }
          if (elt[i][effectPattern].charAt(3) == "3") {
            elt[i][posStartX] = 160;  elt[i][posStartY] = 160;
          }
          elt[i][stepX] = -32767;  elt[i][stepY] = 0;
          if (elt[i][effectPattern].charAt(1) == "1") {
            elt[i][posEndX] = 13;  elt[i][posEndY] = 12;  elt[i][frame] = 160;
          }
          if (elt[i][effectPattern].charAt(1) == "2") {
            elt[i][posEndX] = 7;  elt[i][posEndY] = 2;  elt[i][frame] = 160;
          }
          if (elt[i][effectPattern].charAt(1) == "3") {
            elt[i][posEndX] = 11;  elt[i][posEndY] = 4;  elt[i][frame] = 160;
          }
          if (elt[i][effectPattern].charAt(1) == "4") {
            elt[i][posEndX] = 7;  elt[i][posEndY] = 4;  elt[i][frame] = 160;
        } }
        if (elt[i][effectPattern].charAt(2) == "1") elt[i][intervalTime] = 200;
        if (elt[i][effectPattern].charAt(2) == "2") elt[i][intervalTime] = 100;
        if (elt[i][effectPattern].charAt(2) == "3") elt[i][intervalTime] = 50;
        if ( elt[i][startTime] >= 0 ) setTimeout( "HpbVfxtimer(" + i + ")", elt[i][startTime] );
} } } }

function HpbVfxtimer(tid) {
  if (isNC || isIE) {
    if (layerobj[tid]) {
      var func_str;
      func_str = elt[tid][func] + "( tid, elt[tid], layerobj[tid] )";
      eval(func_str);
} } }

function HpbVfxshowobj(obj) {
  if (obj) {
    if (isNC) obj.visibility = "show";
    if (isIE) obj.visibility = "visible";
    lastobj = obj;
} }

function HpbVfxhideobj(obj) {
  if (obj) {
    if (isNC) obj.visibility = "hide";
    if (isIE) obj.visibility = "hidden";
} }

function HpbVfx0001(tid,et,ob) {
  var x;  var y;
  if (ob) {
    if (ob.init == false) {
      if (et[stepX] != -32767) ob.stepX = et[stepX] * Math.cos(et[angle]);
      else ob.stepX = (et[posEndX] - et[posStartX]) / et[frame];
      if (et[stepY] != -32767) ob.stepY = et[stepY] * Math.sin(et[angle]);
      else ob.stepY = (et[posEndY] - et[posStartY]) / et[frame];
      if (ob.stepX > 0 && ob.stepX < 1) ob.stepX = 1;
      if (ob.stepX < 0 && ob.stepX > -1) ob.stepX = -1;
      if (ob.stepY > 0 && ob.stepY < 1) ob.stepY = 1;
      if (ob.stepY < 0 && ob.stepY > -1) ob.stepY = -1;
      if (et[posStartX] != -32767) ob.x = et[posStartX];
      else if (ob.stepX > 0) ob.x = 0 - ob.pos_w; else ob.x = ob.innerW - ob.pos_w;
      if (et[posStartY] != -32767) ob.y = et[posStartY];
      else if (ob.stepY > 0) ob.y = 0 - ob.pos_h; else ob.y = ob.innerH - ob.pos_h;
      if (et[posEndX] != -32767) ob.posEndX = et[posEndX];
      else if (ob.stepX > 0) ob.posEndX = ob.innerW - ob.pos_w; else ob.posEndX = 0 - ob.pos_w;
      if (et[posEndY] != -32767) ob.posEndY = et[posEndY];
      else if (ob.stepY > 0) ob.posEndY = ob.innerH - ob.pos_h; else ob.posEndY = 0 - ob.pos_h;
      HpbVfxshowobj(ob);
      ob.init = true;  ob.frame = 0;
    }
    ob.stepX = ob.stepX * et[accelerationX];
    if (ob.stepX > 0 && ob.stepX < 1) ob.stepX = 1;
    if (ob.stepX < 0 && ob.stepX > -1) ob.stepX = -1;
    ob.stepY = ob.stepY * et[accelerationY];
    if (ob.stepY > 0 && ob.stepY < 1) ob.stepY = 1;
    if (ob.stepY < 0 && ob.stepY > -1) ob.stepY = -1;
    ob.x += ob.stepX;  ob.y += ob.stepY;
    var endX;  var endY;
    endX = false;  endY = false;
    if (ob.stepX > 0) if (ob.x >= ob.posEndX) {endX = true;  ob.x = ob.posEndX;}
    if (ob.stepX < 0) if (ob.x <= ob.posEndX) {endX = true;  ob.x = ob.posEndX;}
    if (ob.stepX == 0) endX = true;
    if (ob.stepY > 0) if (ob.y >= ob.posEndY) {endY = true;  ob.y = ob.posEndY;}
    if (ob.stepY < 0) if (ob.y <= ob.posEndY) {endY = true;  ob.y = ob.posEndY;}
    if (ob.stepY == 0) endY = true;
    ob.left = Math.round( ob.x );  ob.top = Math.round(ob.y);
    if (endX == true && endY == true) {
      if (et[endVisibility] == false) HpbVfxhideobj(ob);
      ob.init = false;
      if (et[repeat] == true) setTimeout("HpbVfxtimer(" + tid + ")",et[startTime]);
      else if (et[nextLayerIdx] >= 0) setTimeout("HpbVfxtimer(" + et[nextLayerIdx] + ")",et[nextStartTime]);
    } else setTimeout("HpbVfxtimer(" + tid + ")",et[intervalTime]);
} }

function HpbVfx0101(tid,et,ob) {
  var cl;  var cr;  var ct;  var cb;  var tm;  var x;  var y;
  if (ob) {
    if (ob.init == false) {
      if (et[stepX] != -32767) ob.cs_x = et[stepX]; else ob.cs_x = ob.pos_w / et[frame];
      if (et[stepY] != -32767) ob.cs_y = et[stepY]; else ob.cs_y = ob.pos_h / et[frame];
      ob.c_x = 0;  ob.c_y = 0;
      HpbVfxshowobj(ob);
      ob.init = true;
    }
    tm = false;
    cl = 0;  cr = ob.pos_w;  ct = 0;  cb = ob.pos_h;
    x = ob.pos_x;  y = ob.pos_y;
    if (et[fixedX] == false) {
      if (ob.cs_x > 0) {
        ob.c_x += ob.cs_x;
        if (cr > ob.c_x) {
          cl = cr - ob.c_x;  tm = true;  x = ob.pos_x - ob.pos_w + ob.c_x;
      } }
      if (ob.cs_x < 0) {
        ob.c_x += ob.cs_x;  cr = ob.c_x * -1;
        if (cr < ob.pos_w) {
          tm = true;  x = ob.pos_x + ob.pos_w + ob.c_x;
        } else cr = ob.pos_w;
      }
    } else {
      if (ob.cs_x > 0) {
        ob.c_x += ob.cs_x;
        if (cr > ob.c_x) {cr = ob.c_x;  tm = true;}
      }
      if (ob.cs_x < 0) {
        ob.c_x += ob.cs_x;  cl = ob.c_x * -1;
        if (cl < ob.pos_w) {tm = true;  cl = ob.pos_w - cl;} else cl = 0;
    } }
    if (et[fixedY] == false) {
      if (ob.cs_y > 0) {
        ob.c_y += ob.cs_y;
        if (cb > ob.c_y) {ct = cb - ob.c_y;  tm = true;  y = ob.pos_y - ob.pos_h + ob.c_y;}
      }
      if (ob.cs_y < 0) {
        ob.c_y += ob.cs_y;  cb = ob.c_y * -1;
        if ( cb < ob.pos_h ) {tm = true;  y = ob.pos_y + ob.pos_h + ob.c_y;} else cb = ob.pos_h;
      }
    } else {
      if (ob.cs_y > 0) {
        ob.c_y += ob.cs_y;
        if (cb > ob.c_y) {cb = ob.c_y;  tm = true;}
      }
      if (ob.cs_y < 0) {
        ob.c_y += ob.cs_y;  ct = ob.c_y * -1;
        if (ct < ob.pos_h) {tm = true;  ct = ob.pos_h - ct;} else ct = 0;
    } }
    if (isNC) {ob.clip.left = cl;  ob.clip.right = cr;  ob.clip.top = ct;  ob.clip.bottom = cb;}
    if (isIE) ob.clip = "rect(" + ct + "," + cr + "," + cb + "," + cl + ")";
    ob.top = y;  ob.left = x;
    if (tm) setTimeout("HpbVfxtimer(" + tid + ")",et[intervalTime]);
    else {
      if (et[endVisibility] == false) HpbVfxhideobj(ob);
      ob.init = false;
      if (et[repeat] == true) setTimeout("HpbVfxtimer(" + tid + ")",et[startTime]);
      else if (et[nextLayerIdx] >= 0) setTimeout("HpbVfxtimer(" + et[nextLayerIdx] + ")",et[nextStartTime]);
} } }

function HpbVfx0201(tid,et,ob) {
  var cl;  var cr;  var ct;  var cb;  var tm;  var x;  var y;
  if (ob) {
    if (ob.init == false) {
      if (et[stepX] != -32767) ob.cs_x = et[stepX]; else ob.cs_x = ob.pos_w / et[frame];
      if (et[stepY] != -32767) ob.cs_y = et[stepY]; else ob.cs_y = ob.pos_h / et[frame];
      ob.c_w = et[posEndX] - et[posStartX];  ob.c_h = et[posEndY] - et[posStartY];
      ob.c_x = 0;  ob.c_y = 0;
      HpbVfxshowobj(ob);
      ob.init = true;
    }
    tm = false;
    cl = 0;  cr = ob.pos_w;  ct = 0;  cb = ob.pos_h;
    x = et[posStartX];  y = et[posStartY];
    if (ob.cs_x > 0) {
      ob.c_x += ob.cs_x;
      if (ob.c_x < (ob.pos_w - ob.c_w)) {
        cl = ob.c_x;  cr = cl + ob.c_w;
        tm = true;
      } else cl = ob.pos_w - ob.c_w;
    }
    if (ob.cs_x < 0) {
      ob.c_x += ob.cs_x;  cr = ob.pos_w + ob.c_x;
      if (cr > ob.c_w) {cl = cr - ob.c_w;  tm = true;}
      else cr = ob.c_w;
    }
    if (ob.cs_y > 0) {
      ob.c_y += ob.cs_y;
      if (ob.c_y < (ob.pos_h - ob.c_h)) {
        ct = ob.c_y;  cb = ct + ob.c_h;
        tm = true;
      } else ct = ob.pos_h - ob.c_h;
    }
    if (ob.cs_y < 0) {
      ob.c_y += ob.cs_y;  cb = ob.pos_h + ob.c_y;
      if (cb > ob.c_h) {ct = cb - ob.c_h;  tm = true;}
      else cb = ob.c_h;
    }
    if (isNC) {ob.clip.left = cl;  ob.clip.right = cr;  ob.clip.top = ct;  ob.clip.bottom = cb;}
    if (isIE) ob.clip = "rect(" + ct + "," + cr + "," + cb + "," + cl + ")";
    x -= cl;  y -= ct;
    ob.top = y;  ob.left = x;
    if (tm) setTimeout( "HpbVfxtimer(" + tid + ")",et[intervalTime]);
    else {
      if (et[endVisibility] == false) HpbVfxhideobj(ob);
      ob.init = false;
      if (et[repeat] == true) setTimeout("HpbVfxtimer(" + tid + ")",et[startTime]);
      else if (et[nextLayerIdx] >= 0) setTimeout("HpbVfxtimer(" + et[nextLayerIdx] + ")",et[nextStartTime]);
} } }

function HpbVfx0301(tid,et,ob) {
  var x;  var y;  var tx;  var ty;
  if (ob) {
    if (ob.init == false) {
      if (et[stepX] != -32767) ob.step = et[stepX]; else ob.step = (Math.PI * 2) / et[frame];
      ob.boundX = et[posStartX];  ob.boundY = et[posStartY];
      ob.angle = 0.0;
      HpbVfxshowobj(ob);
      ob.init = true;
    }
    tx = Math.cos(ob.angle * et[posEndX]) * ob.boundX;  ty = Math.sin(ob.angle * et[posEndY]) * ob.boundY;
    if (et[fixedX] != 0) tx = Math.abs(tx) * et[fixedX];
    if (et[fixedY] != 0) ty = Math.abs(ty) * et[fixedY];
    x = et[posX];  y = et[posY];
    x += tx * Math.cos(et[angle]);  y += tx * Math.sin(et[angle]);
    x += ty * Math.cos(et[angle] + (Math.PI / 2));  y += ty * Math.sin(et[angle] + (Math.PI / 2));
    ob.top = Math.round(y);  ob.left = Math.round(x);
    if (et[accelerationX] != 1.0 || et[accelerationY] != 1.0) {
      ob.boundX *= et[accelerationX];  ob.boundY *= et[accelerationY];
      if (ob.boundX < 4  && ob.boundY < 4) {
        ob.init = false;
        if (et[repeat] == true) setTimeout("HpbVfxtimer(" + tid + ")",et[startTime]);
        else if (et[nextLayerIdx] >= 0) setTimeout("HpbVfxtimer(" + et[nextLayerIdx] + ")",et[nextStartTime]);
      } else {
        ob.angle += ob.step;
        setTimeout("HpbVfxtimer(" + tid + ")",et[intervalTime]);
      }
    } else {
      if (ob.angle >= (2 * Math.PI)) {
        ob.init = false;
        if (et[repeat] == true) setTimeout("HpbVfxtimer(" + tid + ")",et[startTime]);
        else if (et[nextLayerIdx] >= 0) setTimeout("HpbVfxtimer(" + et[nextLayerIdx] + ")",et[nextStartTime]);
      } else {
        ob.angle += ob.step;
        setTimeout("HpbVfxtimer(" + tid + ")",et[intervalTime]);
} } } }

function HpbVfx0311(tid,et,ob) {
  var x;  var y;  var ws;
  if (ob) {
    if (ob.init == false) {ob.setp = 0;  HpbVfxshowobj(ob);  ob.init = true;}
    x = et[posX];  y = et[posY];
    if (et[fixedX] == true) ws = ob.setp;
    else {
      ws = Math.round(Math.random() * 4);
      if (ws > 3) ws = 0;
    }
    if (ws == 1) x += et[stepX];
    if (ws == 3) x -= et[stepX];
    if (et[fixedY] == true) ws = ob.setp;
    else {
      ws = Math.round(Math.random() * 4);
      if (ws > 3) ws = 0;
    }
    if (ws == 1) y += et[stepY];
    if (ws == 3) y -= et[stepY];
    ob.top = Math.round( y );  ob.left = Math.round( x );
    ob.setp ++;
    if (ob.setp >= 4) {
      ob.init = false;
      if (et[repeat] == true) setTimeout("HpbVfxtimer(" + tid + ")",et[startTime]);
      else if (et[nextLayerIdx] >= 0) setTimeout("HpbVfxtimer(" + et[nextLayerIdx] + ")",et[nextStartTime]);
    } else setTimeout("HpbVfxtimer(" + tid + ")",et[intervalTime]);
} }

function HpbVfx0401(tid,et,ob) {
  var x;  var y;  var tx;  var ty;
  if (ob) {
    if (ob.init == false) {
      if (et[stepX] != -32767) ob.step = et[stepX]; else ob.step = (Math.PI * 2) / et[frame];
      ob.angle = 0.0;
      HpbVfxshowobj(ob);
      ob.init = true;
    }
    tx = Math.cos((ob.angle * et[posEndX]) + et[stepY]) * et[posStartX];
    ty = Math.sin((ob.angle * et[posEndY]) + et[stepY]) * et[posStartY];
    x = et[posX];  y = et[posY];
    x += tx * Math.cos(et[angle]);  y += tx * Math.sin(et[angle]);
    x += ty * Math.cos(et[angle] + (Math.PI / 2));  y += ty * Math.sin(et[angle] + (Math.PI / 2));
    ob.top = Math.round(y);  ob.left = Math.round(x);
    if (Math.abs(ob.angle) >= (2 * Math.PI)) {
      ob.init = false;
      if (et[repeat] == true) setTimeout("HpbVfxtimer(" + tid + ")",et[startTime]);
      else if (et[nextLayerIdx] >= 0) setTimeout("HpbVfxtimer(" + et[nextLayerIdx] + ")",et[nextStartTime]);
    } else {
      ob.angle += ob.step;
      setTimeout("HpbVfxtimer(" + tid + ")",et[intervalTime]);
} } }

function HpbVfx0501(tid,et,ob) {
  if (ob) {
    if (ob.init == false) {HpbVfxshowobj(ob);  ob.init = true;}
    var px;  var py;
    if (isNC) {px = window.pageXOffset;  py = window.pageYOffset;}
    if (isIE) {px = document.body.scrollLeft;  py = document.body.scrollTop;}
    ob.top = Math.round(py + et[posY]);  ob.left = Math.round(px + et[posX]);
    setTimeout("HpbVfxtimer(" + tid + ")",et[intervalTime]);
} }
//-->
</SCRIPT></HEAD>
<body bgcolor="#3366ff" text="#ffffff" link="#00ffcc" vlink="#66cccc" alink="#99ff00" onload="HpbVfxinit('Layer1','HpbVfx0301','G221',0,0,1);">
<p align="center"><br>
<a href="link.html" target="_blank">お薦めリンク</a><a href="link.html" target="_blank"><img src="http://www.sports-buddy.jp/button121.gif" width="52" height="52" border="0" alt=""></a>　　　<font color="#ff0000"><b>　<a href="foot.html" target="_blank"><br>
<br>
<br>
</a></b></font><a href="index.html" target="_blank"><img src="http://www.sports-buddy.jp/button3131211.gif" width="153" height="116" border="0" alt="トップページ"></a><a href="OWS.html" target="_self"><img src="http://www.sports-buddy.jp/button313141.gif" width="149" height="117" border="0" alt="オーシャンスイム"></a><a href="kiz.html" target="_self"><img src="http://www.sports-buddy.jp/button313126.gif" width="142" height="116" border="0" alt="キッズプログラム"></a><a href="http://wateractivity.blogspot.jp/p/blog-page.html" target="_self"><img src="http://www.sports-buddy.jp/button3131241.gif" width="136" height="116" border="0" alt="シーカヤック教室"></a><a href="sgoto.html" target="_blank"><img src="http://www.sports-buddy.jp/button313123111.gif" width="131" height="117" border="0" alt="後藤新弥のＨＰ"></a><br>
<br>
<a href="amanda/framepage2.html" target="_blank">amanda</a><br>
<br>
<br>
<font size="+1"><b>～～ＮＰＯバディ冒険団　スポーツ研究室～～<br>
</b><br>
<b>♪♪未知の旅へ踏み出そう</b><font size="-1"><br>
</font><font size="+1"><b><font size="+4">♪♪</font><font size="+4" color="#ff0000">INTO　THE　UNＫＮOWN<br>
<img src="http://www.sports-buddy.jp/kumo_b11.jpg" width="160" height="112" border="0"></font><font size="+4" color="#ffffff"><font size="+1" color="#ffffff">インナーゲーム研究会特別顧問</font></font><font size="+4" color="#ff0000">　<img src="http://www.sports-buddy.jp/self20171.jpg" width="74" height="101" border="0">　</font><font size="+3" color="#ff0000"><br>
　</font><font size="+1" color="#ffffff">日刊スポーツ編集委員、江戸川大学特任教授などを経て、スポーツ集中力を専門研究。,</font><font size="+4" color="#ff0000"><br>
</font></b></font><font size="+0"><font size="+1"><font size="+1"><font color="#ffff00" size="+2"><b>集中力の源流「インナーゲーム」</b></font></font></font><font size="+2" color="#ffff00"><b>に関連する<br>
訳者の覚え書きメッセージ</b></font></font><font size="+1"><font size="+3" color="#ffff00"><b><br>
</b></font><font size="+4" color="#ffffff"><b>”スポーツ集中力の原点”<br>
</b></font><font size="+3" color="#ff0000"><b>テスト版掲載中<br>
</b></font><font size="+4" color="#ff0000"><b><a href="innergame01.html" target="_blank"><font size="+3">innergame01.html </font></a></b></font><br>
<br>
スポーツ集中力やインナーゲームに関する<br>
ご相談、講義講演などについて以下のメールで御連絡ください<br>
<a href="mailto:sports@js2.so-net.ne.jp</font>"><font size="+3">sports@js2.so-net.ne.jp</font></a><br>
<br>
<br>
<font color="#ffff00"><b>余談ですが。<br>
友人と、「足踏み式消毒ディスペンサー」を開発しました。<br>
<br>
<img src="http://www.sports-buddy.jp/tirashi.jpg" width="636" height="476" border="0"><br>
<br>
<img src="http://www.sports-buddy.jp/ft010.jpg" width="185" height="191" border="0"><br>
</b></font><font color="#ff0000"><b><a href="foot.html" target="_blank">ペダル式消毒ディスペンサー</a></b></font><br>
</font></font></p>
<div style="width : 67px;height : 400px;top : 760px;left : 6px;
	position : absolute;
	z-index : 3;
	visibility : visible;
" id="Layer2" align="center"></div>
<div style="width : 100px;height : 100px;top : 364px;left : 77px;
	position : absolute;
	z-index : 1;
	visibility : visible;
" id="Layer1" align="center"></div>
<p align="center"><font size="+3" color="#ffff00"><b>::::::::::::::::::::::::::::::::::::::::::::::::::::<br>
</b></font></p>
<p align="center"><font color="#ffffff" face="ＭＳ ゴシック" size="+1"><b><i><a href="sgotoprofile.html" target="_self">プロフィール</a></i></b></font><font size="+2"><i><b><font size="+1"><br>
<br>
</font></b><font color="#ffffff" face="ＭＳ ゴシック" size="+2"><font size="4"><a href="books.htm" target="_self">著訳書全リスト（６２冊）</a></font></font><b><font color="#ffffff" size="4" face="ＭＳ ゴシック"><br>
</font></b></i></font></p>
<div align="center"><br>
  <b><i><font color="#00ffff">おやじアドベンチャー　冒険ごっこ写真集</font></i></b><br>
  <br>
  <img src="http://www.sports-buddy.jp/ad/0510taki01.JPG" width="581" height="435" border="0"><br>
  <br>
  <table border="1" summary="冒険写真集" width="365" height="447">
    <tbody>
      <tr>
        <td><a href="ad/ad0510taki.html" target="_blank">&nbsp;０５１０日本最高所の滝　御嶽山</a>　</td>
      </tr>
      <tr>
        <td><a href="ad/ad0411kyouryou.html" target="_blank">&nbsp;０４１１御嶽森林鉄道　三浦ダム橋梁跡</a></td>
      </tr>
      <tr>
        <td><a href="ad/ad0806ainu.html" target="_blank">&nbsp;０８０６阿寒湖でアイヌのカヌーを漕ぐ</a></td>
      </tr>
      <tr>
        <td>&nbsp;<a href="ad/ad0803sirane.html" target="_blank">０８０３草津白根山　真冬の山頂をめざす</a></td>
      </tr>
      <tr>
        <td>&nbsp;<a href="ad/ad0709oodarumi.html" target="_blank">０７０９大弛峠（牧丘林道逆走）MTBを押す</a></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </tbody>
  </table>
</div>
<p align="center"><font size="+3" color="#ffff00"><b><br>
</b></font><font size="+2" color="#ffff00"><b><font size="+0"><font color="#ffff00" size="-1">集中力の源流「インナーゲーム」の研究者のご協力で、専門ＨＰが立ち上がりました。<br>
</font></font></b></font><font size="+1" color="#ffff00"><b>スポーツ集中力の源流「インナーゲーム」研究会<br>
<a href="http://www.innergame.jp/" target="_blank">http://www.innergame.jp/</a>。<br>
<a href="http://www.innergame.jp/" target="_blank"><br>
</a></b></font><font color="#ffff00" size="-1"><b>　１９７０年代に、世界のスポーツ界で始めてスポーツ心理、特に集中力にスポットを当てて発表されたインナーゲームは、その後多くの選手、指導者、スポーツ関係者に大きな影響を与えてきました。また人材育の側面から大小の企業、さらに幅広く教育や医療、介護の各界でも活用されることとなりました。<br>
　このほど、このインナーゲームの考え方をさらに広め、活用し、追求しようという目的から、上記「インナーゲーム研究会」が、その軸として発足したことは、シリーズ訳者として感無量です。<br>
プロ選手や競技協会関係者、企業運営者、学術研究者ほか、多くの方々のご助言、ご助力の賜です。</b></font><font size="+1" color="#ffff00"><b><br>
<br>
<img src="http://www.sports-buddy.jp/booksp.jpg" width="361" height="270" border="0"><br>
</b></font><font size="+1" color="#ff0000"><b><a href="innergame01.html" target="_blank"><br>
</a></b></font>集中力の研究普及には、中学時代の陸上コーチでもあった今村浩明先生（密接に関連するフロー理論の研究第一人者）、プロゴルファーの鈴木則夫氏、翻訳の助言を頂いた田中満茂氏（元日刊スポーツ出版社）ら、ほか多くの方々のご支援を頂いたことを特筆致します。<br>
<br>
<img src="http://www.sports-buddy.jp/jibuntate.jpg" width="556" height="692" border="0"><br>
<br>
<br>
<font color="#ffff00" size="+3">逆境挑戦が面白い！</font><br>
<br>
「人は逆境が大好き？」<br>
<br>
そんな大それたテーマに取り組んでいます。逆境になるといやでも「集中」状態になる。<br>
人にとっての最大の快感が、実は極限の集中状態だからなのです。<br>
<br>
スポーツは人類が発明した「創造的な逆境」かもしれません。<br>
自ら好んで苦しいことに挑戦していく姿は、観る者の本能を揺さぶります。<br>
<br>
現役記者時代、五輪に限らず、「これはもう無理だろう」と思うような状況にチャレンジし、這い上がり、<br>
信じられないような力を差出し切るアスリートを、何度も何度も観てきました。<br>
江戸川大学では限界挑戦型のスポーツたとえばウルトラマラソン、トレールランニング、<br>
オープンウオータースイミングなど、市民スポーツのいわば先端領域の実態調査を通して、<br>
学生さんと一緒に「逆境研究」をしていました。<br>
みな、自ら自分の逆境を創り出し、それを愉しんでいるのです。<br>
すなわち、集中力の極限状態の悦楽です。<br>
<br>
人生の本当の意味、スポーツとは何か、逆境に挑戦するる愉快の秘密は、<br>
すべて「集中力」に要約されるのではないでしょうか。<br>
<br>
今年で７4歳。マスコミや大学での体験をもとに、<br>
＜さあ、新たな人生だ、挑戦だ、などという意気込みなどは全くなしに＞<br>
ＮＰＯバディ冒険団スポーツ研究室や日本レジャーレクリエーション学会などを通して<br>
「面白いこと」を続けております。夏には、知る人ぞ知るヤマハＹＡ１を復活させました。<br>
秋は足踏み式ディスペンサーの企画開発。<br>
昔、「スポーツＵＳＡ］という、スポーツをおちょくった番組を古館伊知郎氏とやったことがありますが、<br>
イタズラ心は相変わらずです。<br>
<br>
<br>
</p>
<div align="center">
  <table border="1" summary="冒険写真集" width="474">
    <tbody>
      <tr>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
  <br>
</div>
<H6 align="center">　 <FONT size="+1">バディ冒険団　ホームページへ</FONT>　<a href="index.html" target="_self"><IMG src="http://www.sports-buddy.jp/b001ani.gif" width="46" height="36" border="0"></a> 　<BR>
　　　　　　　　　　　　　　　　　<BR>
<BR>
</H6>
</body>
</HTML>

