<?php
class MainController extends BaseController
{
    public function actionIndex()
    {
    }
    public function actionShuffle() {
        $articles= new model ("articles");
        $art_shown = $articles->query("select * from articles where articles.isdraft = 0 order by rand() limit 3");
        $this->art_shown = $art_shown;
    }
}
