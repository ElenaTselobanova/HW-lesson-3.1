<?php
class News
{
    private $news;
    public function __construct($news)
    {
        $file = file_get_contents($news);
        $decode = json_decode($file, true);
        $this->news = $decode;
    }
    public function getNews()
    {
        $newsList ='';
        foreach ($this->news as $item)
        {
            $newsList .= '<h2>' . $item['headline'] . '</h2>' . '<small>' . $item['date'] . '</small>' . '<p>' . $item['content'] . '</p>' . '<small>' . $item['author'] . '</small>';
        }
        return $newsList;
    }
}
$news = new News('news.json');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>

<?=$news->getNews();?>

</body>
</html>
/**
 * Created by PhpStorm.
 * User: user
 * Date: 25.07.2018
 * Time: 19:04
 */