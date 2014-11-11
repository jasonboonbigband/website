<?php include("header.php"); ?>

<div class ="mainborder">

  <div class ="header">
    <img src="images/header/home-header3.png" width="960" height="380" />
  </div>

  <div class="lowerpart">

    <div id="silhouette">
	<img src="images/kopf.png" width="450" id="bottomImage" />
    </div>

  <div class ="content">
    <h1> Galerie </h1>
  <!--START JUICEBOX EMBED-->
<script src="gallery/stagedays/jbcore/juicebox.js"></script>
<script>
new juicebox({
containerId: "juicebox-container",
galleryWidth: "600",
galleryHeight: "500",
backgroundColor: "#222222"
});
</script>
<div id="juicebox-container"></div>
<!--END JUICEBOX EMBED-->
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>

  </div>

</div>

<?php include("footer.php"); ?>