<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>We found it in the grass</title>
	<link rel="stylesheet" href="/css/style.css" type="text/css" charset="utf-8">
</head>

<body>
  <div class="content">

    <h1>We found it in the grass.</h1>

  <?php
  require_once('magpierss/rss_fetch.inc');
  $url = "http://api.search.yahoo.com/WebSearchService/rss/webSearch.xml?appid=yahoosearchwebrss&query=%22we+found+it+in+the+grass%22&adult_ok=1";
  $rss = fetch_rss( $url );

  //echo "Channel Title: " . $rss->channel['title'] . "<p>";
  echo "<ul>";
  foreach ($rss->items as $item) {
    $href = $item['link'];
    $title = $item['title'];
    $description = $item['description'];
    echo "<li><p class=\"link\"><a href=$href>$title</a></p><p class=\"description\">$description</p></li>";
  }
  echo "</ul>";
  ?>

  </div>

</body>
</html>
