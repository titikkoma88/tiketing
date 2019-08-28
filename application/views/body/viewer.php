<!DOCTYPE html>
<html>

<head>
  <!-- In production, only one script (pdf.js) is necessary -->
  <!-- In production, change the content of PDFJS.workerSrc below -->
  <script src="<?php echo base_url('asset/src/shared/util.js')?>"></script>
  <script src="<?php echo base_url('asset/src/display/api.js')?>"></script>
  <script src="<?php echo base_url('asset/src/display/metadata.js')?>"></script>
  <script src="<?php echo base_url('asset/src/display/pattern_helper.js')?>"></script>
  <script src="<?php echo base_url('asset/src/display/font_loader.js')?>"></script>
  <script src="<?php echo base_url('asset/src/display/svg.js')?>"></script>

  <script>
    // Specify the main script used to create a new PDF.JS web worker.
    // In production, leave this undefined or change it to point to the
    // combined `pdf.worker.js` file.
    PDFJS.workerSrc = "<?php echo base_url('asset/src/worker_loader.js')?>";
  </script>

  <script>
/* -*- Mode: Java; tab-width: 2; indent-tabs-mode: nil; c-basic-offset: 2 -*- */
/* vim: set shiftwidth=2 tabstop=2 autoindent cindent expandtab: */

//
// See README for overview
//

'use strict';

// Parse query string to extract some parameters (it can fail for some input)
var query = document.location.href.replace(/^[^?]*(\?([^#]*))?(#.*)?/, '$2');
var queryParams = query ? JSON.parse('{' + query.split('&').map(function (a) {
  return a.split('=').map(decodeURIComponent).map(JSON.stringify).join(': ');
}).join(',') + '}') : {};

<?php $nmFile = base_url('file/'.$nama_file);  ?>

var url = queryParams.file || "<?=$nmFile;?>";
var scale = +queryParams.scale || 1.5;

//
// Fetch the PDF document from the URL using promises
//
PDFJS.getDocument(url).then(function(pdf) {
  var numPages = pdf.numPages;
  // Using promise to fetch the page

  // For testing only.
  var MAX_NUM_PAGES = 50;
  var ii = Math.min(MAX_NUM_PAGES, numPages);

  var promise = Promise.resolve();
  for (var i = 1; i <= ii; i++) {
    var anchor = document.createElement('a');
    anchor.setAttribute('name', 'page=' + i);
    anchor.setAttribute('title', 'Page ' + i);
    document.body.appendChild(anchor);

    // Using promise to fetch and render the next page
    promise = promise.then(function (pageNum, anchor) {
      return pdf.getPage(pageNum).then(function (page) {
        var viewport = page.getViewport(scale);



        var container2 = document.createElement('div');
        container2.id = 'labelContainer' + pageNum;
        container2.className = 'labelContainer';
        anchor.appendChild(container2);

        var container = document.createElement('div');
        container.id = 'pageContainer' + pageNum;
        container.className = 'pageContainer';
        container.style.width = viewport.width + 'px';
        container.style.height = viewport.height + 'px';
        anchor.appendChild(container);

        var container2 = document.createElement('div');
        container2.id = 'labelClear' + pageNum;
        container2.className = 'labelClear';
        anchor.appendChild(container2);

        return page.getOperatorList().then(function (opList) {
          var svgGfx = new PDFJS.SVGGraphics(page.commonObjs, page.objs);
          return svgGfx.getSVG(opList, viewport).then(function (svg) {
            container.appendChild(svg);
          });
        });
      });
    }.bind(null, i, anchor));
  }
});


  </script>
  <style>
    *{
      margin: 0;
      padding: 0;
    }
    body {
      background-color: gray;
    }

    .pageContainer {
      border : 1px solid black;
      margin : 5px auto;
      background-color : white;
    }
    .labelContainer{
      position: relative;
      background-image : url('../../../asset/logo.png') !important;
      background-position: center;
      background-repeat: no-repeat;
      z-index:9999;
      height: 130px;
      width: 780px;
      float: left;
      margin-left: 23%;
      top: 500px;
    }

    .labelClear{
      clear: both;
      margin : 135px auto;
    }
    </style>

  <title><?=$title?></title>
</head>

<body>
</body>

</html>
