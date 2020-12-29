<?php
	add_theme_support( 'post-thumbnails', array( 'post' ) );



	function getArticlesPerHome($articles = 3){
		return $articles;
	}

	function getArticlesCategoryID($category = 1){
		return $category;
	}


/*
*  получить ID категории
*  par  пост
*/
	function getCategoryID($post){
		if($post){
			return get_the_category($post->ID)[0]->cat_ID;
		}
		return 0;
	}


	function getMaxQueryReacords($count = 10){
		return $count;
	}

	function isArticle($post){
		$categoryID = get_the_category($post->ID)[0]->cat_ID;
		if($categoryID == getArticlesCategoryID()){
			return true;
		}
		return false;

	}

	function isInstructorsInfo($post){
			}