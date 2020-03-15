<?php

use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
    protected $article;

    protected function setUp(): void
    {
        $this->article = new App\Article();
    }

    public function testTitleIsEmptyByDefault()
    {
        $this->assertEmpty($this->article->title);
    }

    public function testSlugIsEmptyWithNoTitle()
    {
        $this->assertSame($this->article->getSlug(),"");
    }

    /*
    public function testSlugHasSpacesReplacedByUnderscores()
    {
        $this->article->title = "An exemple article";
        $this->assertEquals($this->article->getSlug(),"An_exemple_article");
    }

    public function testSlugHasSpacesReplacedBySingleUnderscores()
    {
        $this->article->title = "An     exemple  \n   article";
        $this->assertEquals($this->article->getSlug(),"An_exemple_article");
    }

    public function testSlugDoesNoStartOrEndWithAnUnderscore()
    {
        $this->article->title = " An     exemple  \n   article ";
        $this->assertEquals($this->article->getSlug(),"An_exemple_article");
    }

    public function testSlugDoesNotHaveAnyNonWordCharacters()
    {
        $this->article->title = "Read! This! Now!";
        $this->assertEquals($this->article->getSlug(),"Read_This_Now");
    }
    */

    public function titleExemple(){
        return [
            'Slug Has Spaces Replaced By Underscores'=>
                ["An exemple article","An_exemple_article"],
            'Slug Has Spaces Replaced By Single Underscores'=>
                ["An     exemple  \n   article","An_exemple_article"],
            'Slug Does No Start Or End With An Underscore'=>
                [" An exemple article ", "An_exemple_article"],
            'Slug Does Not Have Any Non Word Characters'=>
                ["Read! This! Now!","Read_This_Now"]
        ];
    }

    /**
     * @dataProvider titleExemple
     * @param $title
     * @param $slug
     */
    public function testSlug($title,$slug){

        $this->article->title = $title;
        $this->assertEquals($this->article->getSlug(),$slug);
    }
}