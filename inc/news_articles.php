<?php

include 'connection.php';

$news_articles = $conn->query("SELECT * FROM articles ORDER BY article_id ASC LIMIT 3");
$article = $news_articles->fetchAll(PDO::FETCH_ASSOC);

foreach($article as $row => $item) {

    if ($item['top_right_text'] == "NEWS") {
        echo "<div class=\"flex-col med-dis\">";
    } else {
        echo "<div class=\"flex-col\">";
    };

echo "<a href=\"#\" class=\"news-card\">";
echo "<div class=\"news-item\">";
echo "<div class=\"top-right-outer\">";
echo "<div class=\" " . $item['top_right_colour'] . " \">";
echo "<span class=\"h5\">" . $item['top_right_text'] . " ";
echo "</div>";
echo "</div>";
echo "<div class=\"news-img\">";
echo "<img src=\" " . $item['img_src'] . "\" alt=\"News Article Image\">";
echo "</div>";
echo "<div class=\"news-text\">";
echo "<div class=\"news-para\">";
echo "<h4 class=\"" . $item['title_colour'] . "\">" . $item['title_text'] . "<span class=\"text-grey\">- " . $item['time_read'] . " MINUTE READ</span></h4>";
echo "<p>" . $item['article_summary'] . "</p>";
echo "</div>";
echo "<span class=\"" . $item['button_colour'] . "\">READ MORE</span>";
echo "<hr class=\"hr\">";    
echo "<div class=\"news-bot\">";
echo "<img class=\"author-image\" src=\"" . $item['author_img'] . "\" alt=\"Author image\">";
echo "<P><span class=\"strong\">Posted by " . $item['author'] . "</span> <br> " . $item['date_posted'] . "</P>";      
echo "</div>";
echo "</div> ";            
echo "</div>";
echo "</a>";
echo "</div>";


}


?>