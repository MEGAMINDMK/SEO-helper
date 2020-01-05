<style>
code {
  background-color: #eee;
  display: block;
  padding: 20px;
}
</style>
<?php
$seo = $_POST["url"];
echo "save me as sitemap.xml in your root folder of website";
echo "<code><textarea rows='13' cols='70' style='border:none; resize: none;'>
<?xml version='1.0' encoding='UTF-8'?>
<urlset
      xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'
      xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance'
      xsi:schemaLocation='http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd'>
<url>
<loc>$seo</loc>
<lastmod>2013-01-02</lastmod>
<changefreq>monthly</changefreq>
<priority>0.8</priority>
</url>
</urlset>
</textarea></code>";
echo "save me as robots.txt in your root folder of website<br>";
echo "<code>User-agent: *<br>
Allow: /<br><br>

Sitemap: $seo/sitemap.xml</code>";
echo "run me after all of the above steps";
echo "<code><a href='https://www.google.com/ping?sitemap=$seo/sitemap.xml'>Ping</a></code>";
?>

