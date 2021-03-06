<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecsprog
 */

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://ecsprog/wp-content/themes/ecsprog/style.css">

    <meta charset="UTF-8">
    <meta name="description" content="Сайт о IT индустрии. Мы публикуем полезные статьи и материалы, которые могут вам помочь!">
    <meta name="Keywords" content="IT, SEO, сайты, программирование, верстка, html, css">   
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TestName</title>
</head>
<body>


   <header class="header">
      <div class="container">
      <div class="header__left">
         <div class="header__brand logo">
            <a href="#" class="logo__link">
                TestName
            </a>
         </div>
         <div class="mobile-menu">
            <button class="mobile-menu__button button-menu" id="button-menu" type="button" aria-label="Меню">
               <span class="line"></span>
               <span class="line"></span>
               <span class="line"></span>
            </button>
         </div>
      </div> 
      
      <div class="header__right">
         <nav class="header__nav main-menu">
            <ul class="main-menu__list">
               <li class="main-menu__item"><a href="#" class="main-menu__link">Публикации</a></li>
               <li class="main-menu__item"><a href="#" class="main-menu__link">Новое</a></li>
               <li class="main-menu__item"><a href="#" class="main-menu__link">Контакты</a></li>
               <li class="main-menu__item"><a href="#" class="main-menu__link">О проекте</a></li>
               <li class="main-menu__item"><a href="#" class="main-menu__link">Реклама</a></li>
            </ul>
         </nav>
         <div class="header__actions">
            <div class="search">
               <form action="" class="search__form form">
                  <div class="form-row">
                     <label for="" class="form-label">
                        <input type="text" class="form-input" placeholder="Поиск по сайту">
                     </label>
                  </div>
               </form>
            </div>
               <button class="search__button btn-search" type="button">
                  <svg class="search__icon" viewBox="0 0 490 490"><defs/><path d="M483 454L362 333A203 203 0 00204 0a204 204 0 10129 362l121 121c9 9 21 9 30 0s8-20-1-29zM41 204a163 163 0 11327 0 163 163 0 01-327 0z"/></svg>
                  <svg class="search__icon" id="close__search" class="search-button-close" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M438 387L307 256l130-131a36 36 0 10-50-50L256 205 125 75a36 36 0 10-50 50l130 131L75 387a36 36 0 1050 51l131-131 131 130a36 36 0 1051-50z"/></svg>
               </button>
         </div>
      </div>
      </div>
      <?php wp_head(); ?>
   </header>