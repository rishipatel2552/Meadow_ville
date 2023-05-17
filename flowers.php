<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\flowers\style.css">
  <link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\flowers\swiper-bundle.min.css">
  <script src="https://kit.fontawesome.com/c41f1e59e7.js" crossorigin="anonymous"></script>
  <!-- ===== Link Swiper's CSS ===== -->
  <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->

  <!-- ===== Fontawesome CDN Link ===== -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<style>
  @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sacramento&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sacramento&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sacramento&display=swap");

/* CSS VARIABLES */
:root {
  --white-color: #fff;
  --dark-color: #fff;
  --body-bg-color: #fff;
  --section-bg-color: #202834;
  --navigation-item-hover-color: #3b5378;
  --text-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
  --box-shadow: 0 5px 25px rgb(0 0 0 / 20%);
  --scroll-bar-color: #fff;
  --scroll-thumb-color: #282f4e;
  --scroll-thumb-hover-color: #454f6b;
}

.checked {
  color: orange;
}

/* Main Css */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  background: var(--body-bg-color);
}

.header {
  z-index: 5;
  position: absolute;
  width: 100%;
  height: calc(5rem + 1rem);
  width: 100%;
  display: flex;
  justify-content: center;
}

ul {
  list-style: none;
}

.nav {
  display: flex;
  flex-direction: row;
  padding-top: 30px;
}
.main-nav {
  display: flex;
  flex-direction: row;
  position: relative;
  width: 100%;
  align-items: center;
  justify-content: space-around;
  padding: 0px;
  transition: 0.3s ease;
}

.main-nav a {
  padding: 10px 15px;
  text-transform: uppercase;
  text-align: center;
  color: #000;
  font-size: 0.99rem;
  font-family: "Inter", sans-serif;
  font-weight: 500;
  text-decoration: none;
  text-shadow: var(--text-shadow);
}


.logo {
  display: inline-flex;
  justify-content: center;
  align-items: center;
  padding-left: 60px;
}

.nav-logo {
  height: 2.8rem;
  width: auto;
}

.logo-des {
  color: #000;
  margin-left: 10px;
  margin-top: 12px;
  font-size: 2rem;
  font-family: "Sacramento", cursive;
  font-weight: 600;
  letter-spacing: 2px;
  text-decoration: none;
  text-shadow: var(--text-shadow);
}

.nav-icon-1 {
  font-size: 2rem;
  margin-left: 120px;
}

.nav-icon-2 {
  font-size: 2.1rem;
  font-weight:500;
  margin-left: 50px;
}

.cart-no{
  position:absolute;
  content:attr(data-count) '$data_count';
  width:25px;
  height:25px;
  font-size:12px;
  line-height:25px;
  border-radius:15px;
  margin-left:80px;
  text-align:center;
  background-color:red;
  color:white;
  cursor:pointer;
}

.nav-icon-3 {
  font-size: 2rem;
  margin-left: 100px;
  text-decoration: none;
  color: #000;
}  


.home {
  min-height: 100vh;
}

.bg-slider {
  z-index: 3;
  position: relative;
  width: 100%;
  min-height: 100vh;
}

.bg-slider .swiper-slide {
  position: relative;
  width: 100%;
  height: 100vh;
}

.swiper-slide .text-content {
  position: absolute;
  top: 35%;
  color: var(--white-color);
  margin: 0 80px;
  transition: 0.3s ease;
  z-index:99;
}

.swiper-slide .text-content .main-title {
  color:#000;
  font-size: 2.4rem;
  font-weight: 600;
  font-family: "Sacramento", cursive;
}

.swiper-slide .text-content .title {
  color:#000;
  font-size: 4.5rem;
  font-weight: 600;
  font-family: "Inter", sans-serif;
}

.swiper-slide .text-content .sub-title {
  color:#000;
  margin-left: 5px;
  font-size: 2.5rem;
  font-weight: 500;
  letter-spacing: 2.5px;
  font-family: "Playfair Display", serif;
  margin-bottom: 55px;
}

.btn-main {
  position: relative;
}

.main-btn:link,
.main-btn:visited {
  position: absolute;
  font-family: "Inter", sans-serif;
  top: 50%;
  text-decoration: none;
  font-size: 1.8rem;
  color: black;
  font-weight: 600;
  padding: 15px 50px;
  background-color: #f68db3;
  border-radius: 14px;
  z-index: 25;
  transition: all 0.3s ease 0s;
}

.btn-main .main-btn i {
  display: inline-block;
  font-size: 1.8rem;
  font-weight: 500;
  justify-content: center;
  transition: 0.3s ease;
}

.btn-main .main-btn:hover i {
  transform: translateX(5px);
}

.main-btn:hover {
  transform: translateY(-4px);
  box-shadow: 0 5px 10px rgb(246, 141, 179, 0.3);
}

.main-btn:active {
  transform: translateY(-1px);
  box-shadow: 0 10px 20px rgb(246, 141, 179, 0.3);
  cursor: pointer;
}

.flower-img_3 {
  position: absolute;
  top: 19%;
  left: 52%;
  z-index: 999;
  height: 82%;
  width: auto;
  object-fit: cover;
  background-position: center;
  background-size: cover;
  pointer-events: none;
  filter: brightness(100%);
  z-index:9;
}

.flower-img_4 {
  width: 100%;
  height: auto;
  object-fit: cover;
  background-position: center;
  background-size: cover;
  pointer-events: none;
}

.bg-slider-thumbs {
  z-index: 777;
  position: absolute;
  bottom: 3rem;
  left: 50%;
  transform: translateX(-50%);
  transition: 0.3s ease;
}

.thumbs-container {
  display: flex;
  justify-content: center;
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(15px);
  padding: 10px 3px;
  border-radius: 10px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  border-right: 1px solid rgba(255, 255, 255, 0.1);
  box-shadow: var(--box-shadow);
}

.thumbs-container img {
  width: 50px;
  height: 35px;
  margin: 0 5px;
  border-radius: 5px;
  cursor: pointer;
}

.swiper-slide-thumb-active {
  border: 1px solid var(--white-color);
}

/* ******************************************** */

/* Section-2 */

.About {
  padding: 30px;
}
.abt-main {
  width: 100%;
  background-color: #f0f0dc;
  display: flex;
  flex-direction: column;
  padding: 100px;
  justify-content: center;
  text-align: center;
}

.abt-flex-1 {
  display: flex;
  flex-direction: row;
  justify-content: center;
  margin-top: 3rem;
}

.abt-flex-2 {
  margin-top: 5.5rem;
  width: 100%;
}

.flower-flex {
  background-color: #d9d3df;
  box-shadow: 0px 5px 10px rgb(0, 0, 0, 0.3);
  padding: 15px;
  text-align: center;
  height: 330px;
  justify-content: center;
  border-radius: 10px;
}

.first-line{
  margin-left:56%;
  margin-top:18%;
  font-size:3.6rem;
  font-weight:700;
  font-family: serif;
}

.second-line{
  margin-left:56%;
  font-size:3.6rem;
  font-weight:700;
  font-family: serif;
}

.third-line{
  margin-left:56%;
  font-size:1.6rem;
  letter-spacing:1px;
}

.read-more-1{
  position:relative;
  text-decoration:none;
  height:50px;
  width:50px;
  color:#fff;
  background-color:#edccc9;
  padding:10px 20px;
  border-radius:20px;
  box-shadow: 0px 5px 10px rgb(0, 0, 0, 0.3);
  margin-left:56%;
  top:5%;
}


.first-line-2{
  margin-right:48%;
  margin-top:15%;
  font-size:3.6rem;
  font-weight:700;
  font-family: serif;
}

.second-line-2{
  margin-right:48%;
  font-size:3.6rem;
  font-weight:700;
  font-family: serif;
}

.third-line-2{
  margin-right:48%;
  font-size:1.6rem;
  letter-spacing:1px;
}

.read-more-2{
  position:relative;
  text-decoration:none;
  height:50px;
  width:50px;
  color:#fff;
  background-color:#edccc9;
  padding:10px 20px;
  border-radius:20px;
  box-shadow: 0px 5px 10px rgb(0, 0, 0, 0.3);
  margin-right:48%;
  top:10%;
}


.first-line-3{
  margin-right:30%;
  margin-top:10%;
  font-size:2.4rem;
  font-weight:700;
  font-family: serif;
}

.second-line-3{
  margin-right:30%;
  font-size:3rem;
  font-weight:700;
  font-family: serif;
}

.third-line-3{
  margin-right:30%;
  font-size:1.6rem;
  letter-spacing:1px;
}

.read-more-3{
  position:relative;
  text-decoration:none;
  height:50px;
  width:50px;
  color:#fff;
  background-color:#edccc9;
  padding:10px 20px;
  border-radius:20px;
  box-shadow: 0px 5px 10px rgb(0, 0, 0, 0.3);
  margin-right:30%;
  top:7%;
}

.first-line-4{
  font-size:3.4rem;
  font-weight:600;
  font-family: serif;
}

.read-more-4{
  position:relative;
  text-decoration:none;
  height:50px;
  width:50px;
  color:#000;
  font-weight:600;
  background-color:#edccc9;
  padding:10px 20px;
  border-radius:20px;
  box-shadow: 0px 5px 10px rgb(0, 0, 0, 0.3);
  top:4%;
  margin-left:30px;
}

.buy-4{
  position:relative;
  text-decoration:none;
  height:50px;
  width:50px;
  color:#000;
  font-weight:600;
  background-color:#edccc9;
  padding:10px 20px;
  border-radius:20px;
  box-shadow: 0px 5px 10px rgb(0, 0, 0, 0.3);
  top:4%;
  margin-right:30px;
}


.flex-btn {
  border:none;
  background-color:#edccc9 ;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 50px;
  z-index:99;
}

.bunches {
  text-align: center;
  padding: 40px;
  height: 500px;
  width: 55%;
  background-color: #ecf2e6;
  margin-right: 3%;
  box-shadow: 0px 5px 10px rgb(0, 0, 0, 0.3);
  border-radius: 10px;
  background-image: url("img/5559331632_2_1_14-removebg-preview.png");
  object-fit: cover;
  background-position: right;
  background-size: cover;
  pointer-events: none;
  background-size: 40% 110%;
  background-repeat: no-repeat;
}

.bouquets {
  margin-left: 3%;
  text-align: center;
  padding: 40px;
  height: 500px;
  width: 55%;
  box-shadow: 0px 5px 10px rgb(0, 0, 0, 0.3);
  border-radius: 10px;
  background-color: #fcf8f9;
  background-image: url("img/dce3ec89db5e9081558fe177598a70a2.jpg");
  object-fit: cover;
  background-position: center bottom;
  pointer-events: none;
  background-size: 50% auto;
  background-repeat: no-repeat;
}

.abt-flex-3 {
  display: flex;
  flex-direction: row;
  justify-content: center;
  margin-top: 5rem;
}

.blue-box {
  text-align: center;
  padding: 40px;
  height: 500px;
  width: 55%;
  /* background-color:#c8d8d8; */
  background-image: url("img/lav2\ photoshop.png");
  margin-right: 3%;
  box-shadow: 0px 5px 10px rgb(0, 0, 0, 0.3);
  border-radius: 10px;
  object-fit: cover;
  background-position: center;
  background-size: cover;
  pointer-events: none;
  background-size: 125% 100%;
  background-repeat: no-repeat;
}

.bouquets-1 {
  margin-left: 3%;
  text-align: center;
  padding: 40px;
  height: 500px;
  width: 55%;
  background-color: #f6e8e7;
  background-image: url("img/f3-removebg.png");
  box-shadow: 0px 5px 10px rgb(0, 0, 0, 0.3);
  border-radius: 10px;
  object-fit: cover;
  background-size: 50%;
  background-position: right;
  pointer-events: none;
  background-repeat: no-repeat;
}

.features-main {
  padding: 21px 40px;
}

.features {
  padding: 12px;
  display: flex;
  flex-direction: row;
}

.feature-img {
  width: 37%;
}

.feature-img-4 {
  width: 32.5%;
}

.fieldsset-line {
  border-width: 3.5px;
  padding: 10px 40px;
  border-color: #fff;
  border-style: solid;
  border-radius: 5px;
}

.feature-para {
  padding-left: 20px;
  padding-right: 20px;
  padding-top: 18px;
  font-size: 0.7rem;
  text-align: center;
}

/* Subcription */

.subscription {
  padding: 30px;
  display: block;
  position:relative;
}

.flex-item-main {
  background-color: #d7e4db;
}

.flex-item {
  display: flex;
  flex-direction: row;
  justify-content: center;
  padding: 40px;
}

.flex-item-1 {
  margin-top: 100px;
  margin-bottom: 50px;
  width: 23%;
  height: 700px;
  background-color:  #f6e8e7;
  box-shadow: 0 2.4rem 4.8rem rgba(0, 0, 0, 0.1);
  border-radius: 11px;
  overflow: hidden;
  text-align: center;
  font-size: 1.1rem;
  transition: all 0.4s ease;
  position: relative;
}

.flex-item-1::after {
  content: "Rs. 3000/-";
  position: absolute;
  top: 4%;
  right: -18%;
  text-transform: uppercase;
  font-size: 0.99rem;
  font-weight: 600;
  color: #333;
  background-color:  #f78aaf;
  padding: 0.4rem 5rem;
  transform: rotate(45deg);
}

.flex-item-1:hover {
  transform: translateY(-1.2rem);
  box-shadow: 0 3.2rem 6.4rem rgba(0, 0, 0, 0.06);
}

.flex-item-2 {
  margin-top: 100px;
  margin-bottom: 50px;
  width: 23%;
  height: 700px;
  background-color:  #f6e8e7;
  margin-left: 5rem;
  box-shadow: 0 2.4rem 4.8rem rgba(0, 0, 0, 0.1);
  border-radius: 11px;
  overflow: hidden;
  text-align: center;
  font-size: 1.1rem;
  transition: all 0.4s ease;
  position: relative;
}

.flex-item-2::after {
  content: "Rs. 5000/-";
  position: absolute;
  top: 4%;
  right: -18%;
  text-transform: uppercase;
  font-size: 0.99rem;
  font-weight: 600;
  color: #333;
  background-color: #f78aaf;
  padding: 0.4rem 5rem;
  transform: rotate(45deg);
}

.flex-item-2:hover {
  transform: translateY(-1.2rem);
  box-shadow: 0 3.2rem 6.4rem rgba(0, 0, 0, 0.06);
}

.flex-item-3 {
  margin-top: 100px;
  margin-bottom: 70px;
  width: 23%;
  height: 700px;
  background-color:  #f6e8e7;
  margin-left: 5rem;
  box-shadow: 0 2.4rem 4.8rem rgba(0, 0, 0, 0.1);
  border-radius: 11px;
  overflow: hidden;
  text-align: center;
  font-size: 1.1rem;
  transition: all 0.4s ease;
  position: relative;
  text-align:center;
}

.flex-item-3::after {
  content: "Rs. 10000/-";
  position: absolute;
  top: 4%;
  right: -20%;
  text-transform: uppercase;
  font-size: 0.99rem;
  font-weight: 600;
  color: #333;
  background-color: #f78aaf;
  padding: 0.4rem 5rem;
  transform: rotate(45deg);
}

.flex-item-3:hover {
  transform: translateY(-1.2rem);
  box-shadow: 0 3.2rem 6.4rem rgba(0, 0, 0, 0.06);
}

.flex-img-1 {
  background-size: cover;
        background-blend-mode: screen;
        -webkit-clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
        clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
  width: 100%;
  height:53%;
}

.flex-img-2 {
  background-size: cover;
        background-blend-mode: screen;
        -webkit-clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
        clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
  width: 100%;
  height:53%;
}

.flex-img-3{
  background-size: cover;
        background-blend-mode: screen;
        -webkit-clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
        clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
  width: 100%;
  height:53%;
}

.uil-check{
  color:green;
  font-size:1.2rem;
}
.flex-title{
  font-size: 2.2rem;
        font-weight: 300;
        text-transform: uppercase;
        text-align: right;
        color: #000;
        position: absolute;
        top: 24rem;
        right:0.09rem;
        width: 100%;
        text-align:center;
}

.flex-content {
  padding: 4rem 2.8rem 4.8rem 2.8rem;
  color: #514644;
}

.flex-tags {
  margin-bottom: 1.6rem;
  display: flex;
  gap: 0.5rem;
}

.tag {
  display: inline-block;
  padding: 0.6rem 1.2rem;
  font-size: 0.9rem;
  text-transform: uppercase;
  color: green;
  border-radius: 100px;
  font-weight: 600;

}

.flex-attribute li{
  padding-bottom:5px;
}

.flex-attribute li{
  border-bottom: 1px solid #514644;
  padding:top:0.5rem;
}

.tag--free {
  background-color: #514644;
}
/* .tag--vegan {
  background-color: #94d82d;
}
.tag--paleo {
  background-color: #ffd43b;
} */

.countdown-main {
  position: relative;
  height: 91vh;
  margin-top: 10px;
  background-image: url("img/counter\ \(1\).png");
  object-fit: cover;
  background-position: center;
  pointer-events: none;
  background-size: 100%;
  background-repeat: no-repeat;
}

.countdown-container {
  position: absolute;
  left: 52%;
  top: 27%;
}

.count-h1 {
  font-size: 3.5rem;
  font-weight: 800;
  font-family: "Inter", sans-serif;
  text-align: justify;
  word-spacing: 7px;
  padding-bottom: 7px;
}

.count-p {
  font-size: 0.92rem;
}

#timer {
  font-size: 2em;
  font-weight: 100;
  padding-top: 7px;
  padding-bottom: 10px;
  width: 700px;
  color: #000;
  font-weight: 900;
}

#timer div {
  display: inline-block;
  min-width: 90px;
  padding: 5px;
  background: #fff;
  margin-top: 15px;
  margin-right: 15px;
  margin-bottom: 20px;
  box-shadow: 0 2.4rem 4.8rem rgba(0, 0, 0, 0.12);
  text-align: center;
}

#timer div span {
  color: grey;
  display: block;
  margin-top: 5px;
  font-size: 0.4em;
  font-weight: 400;
  text-align: center;
}

.count-btn {
  text-decoration: none;
  color: #fff;
  padding: 10px 20px;
  background-color: #000;
  box-shadow: 0 2.4rem 4.8rem rgba(0, 0, 0, 0.15);
}

/* TESTIMONIALS */

.section-testimonials {
  padding: 30px;
}

.testimonial-main{
  background-color: #f6dad9;
  display: grid;
  grid-template-columns: 55fr 45fr;
  align-items: center;
}

.testimonials-container {
  padding: 6.6rem;
}

.subheading{
  font-size: 1.4rem;
  font-weight: 600;
  color: #282f4e;
}

.heading-secondary{
  font-size: 2.4rem;
  font-weight: 600;
  color: #282f4e;
  padding-top: 10px;
  padding-bottom: 45px;
}

.testimonials {
  display: grid;
  grid-template-columns: 1fr;
  row-gap: 2.2rem;
  column-gap: 8rem;
}

.testimonial-img {
  width: 3rem;
  height: 3rem;
  border-radius: 120%;
  margin-bottom: 1rem;
}

.testimonial-text {
  font-size: 0.99rem;
  line-height: 1.8;
  margin-bottom: 1.2rem;
  text-align: justify;
}

.testimonial-name {
  font-size: 0.96rem;
  color: #6f6f6f;
}

.gallery {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1.6rem;
  padding:2.4rem;
}

.gallery-item {
  overflow: hidden;
}

.gallery-item img {
  height:14rem;
  width:100%;
  display: block;
  transition: all 0.4s;
}

.gallery-item img:hover {
  transform: scale(1.1);
}

/* Footer */

.footer-main{
  position: relative;
  margin-top:100px;
}

.footer {
  padding-top:320px;
  background-image: url(img/BG-footer.png);
  background-position: -288px -335px;
  height: 700px;
  background-repeat: no-repeat;
}

.grid--footer {
  display: grid;
  grid-template-columns: 1.5fr 1.5fr 1fr 1fr 1fr;
}

.footer-logo {
  display: inline-flex;
  justify-content: center;
  align-items: center;
}

.nav-logo {
  height: 2.8rem;
  width: auto;
  padding-right:5px;
}

.logo-des {
  color: #000;
  margin-left: 10px;
  margin-top: 12px;
  font-size: 2.2rem;
  font-family: "Sacramento", cursive;
  font-weight: 600;
  letter-spacing: 2px;
  text-decoration: none;
  text-shadow: var(--text-shadow);
}

.logo-col {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding:10px;
}

.social-links {
  list-style: none;
  display: flex;
  gap: 2.4rem;
  margin-top:20px;
  justify-content: space-around;
}

.social-icon {
  height: 2.6rem;
  width: 2.6rem;
}

.copyright {
  font-size: 0.95rem;
  line-height: 1.6;
  color: #767676;
  margin-top:2.8vh;
}

.footer-heading {
  font-size: 1.2rem;
  font-weight: 500;
  margin-bottom: 4rem;
}

.contacts {
  font-style: normal;
  font-size: 1.2rem;
  line-height: 1.6;
}

.address {
  margin-bottom: 2.4rem;
}

.footer-nav {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: 2rem;
}

.footer-link:link,
.footer-link:visited {
  text-decoration: none;
  font-size: 0.99rem;
  color: #767676;
  transition: all 0.3s;
}

.footer-link:hover,
.footer-link:active {
  color: #555;
}

.footer-link-1:link,
.footer-link-1:visited {
  text-decoration: none;
  font-size: 1.6rem;
  color: #767676;
  transition: all 0.3s;
}

.footer-link-1:hover,
.footer-link-1:active {
  color: #555;
}


/* cards */

.bouquet-cards{
  position: relative;
  display: block;
  width:100%;
  padding: 0px 40px;
  padding-bottom:0px;
}

.bouquet-cards-2{
  position: relative;
  display: block;
  width:100%;
  padding: 0px 40px;
}

.main-card-container {
  display: flex;
  justify-content: center;
}

.main-container {
  width: 100%;
}

.swiper {
  position: relative;
  width: 100%;
  margin-bottom:20px;
}

.stars{
  position:absolute;
  margin-left:160px;
  margin-top:46.5%;
  font-size:23px;
}

.card {
  position: relative;
  margin-top:80px;
  padding:40px;
  background: #fff;
  border-radius: 20px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  margin-bottom:40px;
}

.card .card-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 30px;
  height:200px;
}

.card-btn-buy {
  position: absolute;
  margin-right: 130px;
  margin-top: 46%;
  letter-spacing: 0.5px;
  font-family: sans-serif;
  border: 0;
  font-size: 16px;
  padding: 10px 20px;
  border-radius: 200px;
  font-weight: 600;
  color: #000;
  background-color: #f6dad9;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}

.subscription-btn{
  margin-top:20px;
  letter-spacing: 0.5px;
  font-family: sans-serif;
  border: 0;
  font-size: 16px;
  padding: 10px 20px;
  border-radius: 200px;
  font-weight: 600;
  color: #000;
  background-color: #ecc1f4;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}

.card-text{
  position: absolute;
  font-size:20px;
  margin-top:50px;
  margin-left:160px;
  color:#000;
  font-weight: 400;
  width:160px;
  height: 40px;
  background-color:#dbe7ed;
  text-align: center;
  border-radius: 20px;
  padding:5px 10px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}

.card-content-1 {
  background-color: rgba(171, 211, 219);
}

.img-container-1 {
  position: relative;
  width: 135%;
  right: 42%;
  bottom: 110px;
}

.card-content-2 {
  background-color: #c4e4df;
}

.img-container-2 {
  position: relative;
  width: 125%;
  right: 44%;
  bottom: 100px;
}

.card-content-3 {
  background-color: #d3ebdb;
}

.img-container-3 {
  position: relative;
  width: 120%;
  right: 37%;
  bottom: 100px;
}

.card-content-4 {
  background-color: #e6f6dc;
}

.img-container-4 {
  position: relative;
  width: 125%;
  right: 42%;
  bottom: 100px;
}

.card-content-5 {
  background-color: #ffffe1;
}

.img-container-5 {
  position: relative;
  width: 128%;
  right: 40%;
  bottom: 104px;
}

.card-content-6 {
  background-color: #abd3db;
}

.img-container-6 {
  position: relative;
  width: 115%;
  right: 42%;
  bottom: 130px;
}

.card-content-7 {
  background-color: #c4e4df;
}

.img-container-7 {
  position: relative;
  width: 115%;
  right: 44%;
  bottom: 115px;
}

.card-content-8 {
  background-color: #d3ebdb;
}

.img-container-8 {
  position: relative;
  width: 120%;
  right: 38%;
  bottom: 100px;
}

.card-content-9 {
  background-color: #e6f6dc;
}

.img-container-9 {
  position: relative;
  width: 124%;
  right: 36%;
  bottom: 108px;
}

.card-content-10 {
  background-color: #ffffe1;
}

.img-container-10 {
  position: relative;
  width: 150%;
  right: 36%;
  bottom: 130px;
}

.img-container-11{
  position: relative;
  width: 140%;
  right: 50%;
  bottom: 200px;
}

.img-container-12 {
  position: relative;
  width: 130%;
  right: 40%;
  bottom: 100px;
}
.img-container-13{
  position: relative;
  width: 110%;
  right: 40%;
  bottom: 150px;
}
.img-container-14{
  position: relative;
  width: 152%;
  right: 39%;
  bottom: 130px;
}
.img-container-15{
  position: relative;
  width: 130%;
  right: 38%;
  bottom: 170px;
}
.img-container-16{
  position: relative;
  width: 140%;
  right: 38%;
  bottom: 196px;
}
.img-container-17{
  position: relative;
  width: 132%;
  right: 36%;
  bottom: 180px;
}
.img-container-18{
  position: relative;
  width: 150%;
  right: 37%;
  bottom: 160px;
}
.img-container-19{
  position: relative;
  width: 170%;
  right: 39%;
  bottom: 170px;
}

.img-container-20{
  position: relative;
  width: 130%;
  right: 40%;
  bottom: 170px;
}


.swiper-pagination {
  position: absolute;
  margin-bottom: 0%;
}

.swiper-pagination-bullet {
  height: 7px;
  width: 26px;
  border-radius: 25px;
  background: #7d2ae8;
}

.swiper-button-next {
  opacity: 0.7;
  color: #7d2ae8;
  transition: all 0.3s ease;
  padding-right: 2.5rem;
  padding-top: 0rem;
}
.swiper-button-next:hover {
  opacity: 1;
  color: #7d2ae8;
  transform: translateX(4px);
}

.swiper-button-prev {
  opacity: 0.7;
  color: #7d2ae8;
  transition: all 0.3s ease-in;
  padding-left: 3rem;
  padding-top: 0rem;
}

.swiper-button-prev:hover {
  opacity: 1;
  color: #7d2ae8;
  transform: translateX(-4px);
}

  </style>

</head>


<!-- 

*********************************************************
*********************************************************
*********************************************************
*********************************************************
 -->


<body>
  <header class="header">
    <div class="nav">
      <div class="nav-main">
        <ul class="main-nav">
          <li><a href="#home">Home</a></li>
          <li><a href="#About">About</a></li>
          <li><a href="#subscription">Subscription</a></li>
          <li><a href="#testimonials">Review</a></li>
          <li><a href="#footer-section">Contact us</a></li>
          <li>
            <div class="logo">
              <img src="img/butterfly-made-of-lotus-flower-3872ld-removebg-preview (1).png" class="nav-logo">
              <h1 class="logo-des">Meadow ville</h1>
            </div>
          </li>
          <li class="nav-icon-1"><i class="uil uil-user"></i></li>
          <?php
          $count=0;
          if(isset($_SESSION['cart']))
          {
            $count=count($_SESSION['cart']);
          }
          ?>
          <a class="my-cart" href="mycart.php">
            <div class="cart-no"><?php echo $count; ?></div>
            <li class="nav-icon-2"><i class="uil uil-shopping-bag"></i></li>
          </a>
          <li class="nav-icon-3"><i class="uil uil-search"></i></li>
        </ul>

      </div>
    </div>
    </div>
  </header>
  <section class="home" id="home">
    <div class="swiper bg-slider">
      <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-color:#feeae9;">
          <div>
            <img class="flower-img_3" src="img\Layer 1.png" />
            <div class="text-content">
            <h1 class="main-title">The Meadow ville</h1>
            <h2 class="title">Customize your bunch</h2>
            <h3 class="sub-title">Select Flowers You Love, Packing You Want</h3>
            <div class="btn-main">
              <a href="#bouquet-cards" class="main-btn">Explore more <i class="uil uil-arrow-right"></i></a>
            </div>
          </div>
          </div>
        </div>
        
      </div>
    </div>
    </div>
  </section>
  <section class="About" id="About">
    <div class="abt-main">
      <div class="abt-flex-1">
        <div class="bunches">
        <p class="first-line-3">New Release</p>
          <p class="second-line-3">Explore Our Indoor Collection</p>
          <p class="third-line-3">Get Fresh Green Plant</p>
          <a href="vase" class="read-more-3">Read more</a>
        </div>
        <div class="bouquets">
        <p class="first-line-4">We Have The Rarest Collection</p>
        <span>
        <a href="#" class="buy-4">Buy Now</a>
        <a href="bouquet-cards" class="read-more-4">Read more</a>
        </span>
        </div>
      </div>
      <div class="abt-flex-2">
        <div class="flower-flex">
          <div class="features-main">
            <fieldset class="fieldsset-line">
              <ul class="features">
                <div class="feature-block-1">
                  <li><a href="#" class="feature-icons"><img class="feature-img"
                        src="img\Screenshot_2022-11-01_112056-removebg-preview.png"></a></li>
                  <p class="feature-para">Our flowers arrive fresh from farms
                    all over the world, we choose only the very best
                    quality stems to be lovingly arranged by our</p>
                </div>
                <div class="feature-block-1">
                  <li><a href="#" class="feature-icons"><img class="feature-img"
                        src="img\Screenshot_2022-11-01_112131-removebg-preview.png"></a></li>
                  <p class="feature-para">Need them tomorrow? We've got you
                    covered. We provide a reliable next day
                    delivery service to anywhere in the World.</p>
                </div>
                <div class="feature-block-1">
                  <li><a href="#" class="feature-icons"><img class="feature-img"
                        src="img\Screenshot_2022-11-01_112159-removebg-preview.png"></a></li>
                  <p class="feature-para">We believe beautiful flowers should be
                    received every day of the week, our
                    bouquets & hat boxes are delivered fresh</p>
                </div>
                <div class="feature-block-1">
                  <li><a href="#" class="feature-icons"><img class="feature-img-4"
                        src="img\Screenshot_2022-11-01_112218-removebg-preview.png"></a></li>
                  <p class="feature-para">Our bouquets & hatboxes are arranged and
                    prepared for delivery by skilled florists, in
                    beautiful packaging for that feeling of luxury.</p>
                </div>
              </ul>
            </fieldset>
          </div>
          <p></p>
        </div>
      </div>
      <div class="abt-flex-3">
        <div class="blue-box">
          <p class="first-line">Lavender</p>
          <p class="second-line">Collections</p>
          <p class="third-line">SALE UP TO 20% OFF</p>
          <a href="bouquet-cards" class="read-more-1">Read more</a>
        </div>
        <div class="bouquets-1">
        <p class="first-line-2">Blooming</p>
          <p class="second-line-2">Flower</p>
          <p class="third-line-2">Flat 30% OFF On Bunches</p>
          <a href="vase" class="read-more-2">Read more</a>
        </div>
      </div>
    </div>
  </section>
  <section class="bouquet-cards" id="bouquet-cards">
      <div class="main-card-container">
        <div class="main-container">

          <div class="swiper mySwiper container">
            <div class="swiper-wrapper content">

              <div class="swiper-slide card card-content-1">
                <form action="manage_cart.php" method="post">
                <div class="card-content">
                  <img class="img-container-1"
                    src="page-2/img/3ffc4746-ffeb-41a4-993b-6ada6a376f0e-removebg-preview.png">
                  <button type="submit" name="Add_To_Cart" class="card-btn-buy">Add To Cart</button>
                  <p class="card-text">Price: Rs. 1350</p>
                  <div class="stars">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  </div>
                  <input type="hidden" name="Item_Name" value="bouquet 1">
                  <input type="hidden" name="Price" value="1350">
                </div>
                </form>
              </div>
              <div class="swiper-slide card card-content-2">
                <form action="manage_cart.php" method="post">
                <div class="card-content">
                  <img class="img-container-2"
                    src="page-2/img/6420e548-a45e-4873-958c-1355653d1fd7-removebg-preview.png">
                  <button type="submit" name="Add_To_Cart" class="card-btn-buy">Add To Cart</button>
                  <p class="card-text">Price: Rs. 1400</p>
                  <div class="stars">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  </div>
                  <input type="hidden" name="Item_Name" value="bouquet 2">
                  <input type="hidden" name="Price" value="1400">
                </div>
                </form>
              </div>
              <div class="swiper-slide card card-content-3">
                <form action="manage_cart.php" method="post">
                <div class="card-content">
                  <img class="img-container-3"
                    src="page-2/img/72f19af0-b4a9-4011-b74f-48ae7581f5f2-removebg-preview.png">
                  <button type="submit" name="Add_To_Cart" class="card-btn-buy">Add To Cart</button>
                  <p class="card-text">Price: Rs. 1200</p>
                  <div class="stars">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  </div>
                  <input type="hidden" name="Item_Name" value="bouquet 3">
                  <input type="hidden" name="Price" value="1200">

                </div>
                </form>
              </div>
              <div class="swiper-slide card card-content-4">
                <form action="manage_cart.php" method="post">
                <div class="card-content">
                  <img class="img-container-4"
                    src="page-2/img/d951dbcc-81b2-4d9f-861b-dbb87ae58de9-removebg-preview.png">
                  <button type="submit" name="Add_To_Cart" class="card-btn-buy">Add To Cart</button>
                  <p class="card-text">Price: Rs. 1200</p>
                  <div class="stars">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  </div>
                  <input type="hidden" name="Item_Name" value="bouquet 4">
                  <input type="hidden" name="Price" value="1200">
                </div>
                </form>
              </div>
              <div class="swiper-slide card card-content-5">
                <form action="manage_cart.php" method="post">
                <div class="card-content">
                  <img class="img-container-5"
                    src="page-2/img/e5b5abce-492e-42ff-bdb8-3217f622c301-removebg-preview.png">
                  <button type="submit" name="Add_To_Cart" class="card-btn-buy">Add To Cart</button>
                  <p class="card-text">Price: Rs. 800</p>
                  <div class="stars">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  </div>
                  <input type="hidden" name="Item_Name" value="bouquet 5">
                  <input type="hidden" name="Price" value="800">
                </div>
                </form>
              </div>
              <div class="swiper-slide card card-content-6">
                <form action="manage_cart.php" method="post">
                <div class="card-content">
                  <img class="img-container-6" src="page-2/img/f93893e7161e397dddd1b7e0dd1ae6f6-removebg-preview.png">
                  <button type="submit" name="Add_To_Cart" class="card-btn-buy">Add To Cart</button>
                  <p class="card-text">Price: Rs. 1000</p>
                  <div class="stars">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  </div>
                  <input type="hidden" name="Item_Name" value="bouquet 6">
                  <input type="hidden" name="Price" value="1000">
                </div>
                </form>
              </div>
              <div class="swiper-slide card card-content-7">
                <form action="manage_cart.php" method="post">
                <div class="card-content">
                  <img class="img-container-7" src="page-2/img/b0eb27de24b5bd1f7b693651fa9aec6d-removebg-preview.png">
                  <button type="submit" name="Add_To_Cart" class="card-btn-buy">Add To Cart</button>
                  <p class="card-text">Price: Rs. 900</p>
                  <div class="stars">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>                 
                  <span class="fa fa-star"></span>
                  </div>
                  <input type="hidden" name="Item_Name" value="bouquet 7">
                  <input type="hidden" name="Price" value="900">
                </div>
                </form>
              </div>
              <div class="swiper-slide card card-content-8">
                <form action="manage_cart.php" method="post">
                <div class="card-content">
                  <img class="img-container-8" src="page-2/img/0418d99801a2acf55bc34cdf700a16cb-removebg-preview.png">
                  <button type="submit" name="Add_To_Cart" class="card-btn-buy">Add To Cart</button>
                  <p class="card-text">Price: Rs. 1050</p>
                  <div class="stars">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  </div>
                  <input type="hidden" name="Item_Name" value="bouquet 8">
                  <input type="hidden" name="Price" value="1050">
                </div>
                </form>
              </div>
              <div class="swiper-slide card card-content-9">
                <form action="manage_cart.php" method="post">
                <div class="card-content">
                  <img class="img-container-9" src="page-2/img/ced1632800098d76cc30080a0ca5d31c-removebg-preview.png">
                  <button type="submit" name="Add_To_Cart" class="card-btn-buy">Add To Cart</button>
                  <p class="card-text">Price: Rs. 850</p>
                  <div class="stars">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  </div>
                  <input type="hidden" name="Item_Name" value="bouquet 9">
                  <input type="hidden" name="Price" value="850">
                </div>
                </form>
              </div>
              <div class="swiper-slide card card-content-10">
                <form action="manage_cart.php" method="post">
                <div class="card-content">
                  <img class="img-container-10" src="page-2/img/p-the-delilah-187572-m-removebg-preview.png">
                  <button type="submit" name="Add_To_Cart" class="card-btn-buy">Add To Cart</button>
                  <p class="card-text">Price: Rs. 950</p>
                  <div class="stars">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  </div>
                  <input type="hidden" name="Item_Name" value="bouquet 10">
                  <input type="hidden" name="Price" value="950">
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
  </section>
  <section class="bouquet-cards-2" id="vase">
      <div class="main-card-container">
        <div class="main-container">

          <div class="swiper mySwiper container">
            <div class="swiper-wrapper content">

              <div class="swiper-slide card card-content-1">
                <form action="manage_cart.php" method="post">
                <div class="card-content">
                  <img class="img-container-11"
                    src="vase/ecb563828b84af7382a122cbfc438056-removebg-preview.png">
                  <button type="submit" name="Add_To_Cart" class="card-btn-buy">Add To Cart</button>
                  <p class="card-text">Price: Rs. 2500</p>
                  <div class="stars">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  </div>
                  <input type="hidden" name="Item_Name" value="Vase 1">
                  <input type="hidden" name="Price" value="2500">
                </div>
                </form>
              </div>
              <div class="swiper-slide card card-content-2">
                <form action="manage_cart.php" method="post">
                <div class="card-content">
                  <img class="img-container-12"
                    src="vase/c8cc3a940b5e6d3741f590bb02e645a4-removebg-preview.png">
                  <button type="submit" name="Add_To_Cart" class="card-btn-buy">Add To Cart</button>
                  <p class="card-text">Price: Rs. 3000</p>
                  <div class="stars">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  </div>
                  <input type="hidden" name="Item_Name" value="Vase 2">
                  <input type="hidden" name="Price" value="3000">
                </div>
                </form>
              </div>
              <div class="swiper-slide card card-content-3">
                <form action="manage_cart.php" method="post">
                <div class="card-content">
                  <img class="img-container-13"
                    src="vase/ace580d2223a1dd03aa37a848e5a1d05-removebg-preview.png">
                  <button type="submit" name="Add_To_Cart" class="card-btn-buy">Add To Cart</button>
                  <p class="card-text">Price: Rs. 2400</p>
                  <div class="stars">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  </div>
                  <input type="hidden" name="Item_Name" value="Vase 3">
                  <input type="hidden" name="Price" value="2400">

                </div>
                </form>
              </div>
              <div class="swiper-slide card card-content-4">
                <form action="manage_cart.php" method="post">
                <div class="card-content">
                  <img class="img-container-14"
                    src="vase/a9c58ac2a1f0b3dac7d30b24f53b59cd-removebg-preview.png">
                  <button type="submit" name="Add_To_Cart" class="card-btn-buy">Add To Cart</button>
                  <p class="card-text">Price: Rs. 2200</p>
                  <div class="stars">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  </div>
                  <input type="hidden" name="Item_Name" value="Vase 4">
                  <input type="hidden" name="Price" value="2200">
                </div>
                </form>
              </div>
              <div class="swiper-slide card card-content-5">
                <form action="manage_cart.php" method="post">
                <div class="card-content">
                  <img class="img-container-15"
                    src="vase/717df3b830d0c9cc6ccd2a408b4b4075-removebg-preview.png">
                  <button type="submit" name="Add_To_Cart" class="card-btn-buy">Add To Cart</button>
                  <p class="card-text">Price: Rs. 2500</p>
                  <div class="stars">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  </div>
                  <input type="hidden" name="Item_Name" value="Vase 5">
                  <input type="hidden" name="Price" value="2500">
                </div>
                </form>
              </div>
              <div class="swiper-slide card card-content-6">
                <form action="manage_cart.php" method="post">
                <div class="card-content">
                  <img class="img-container-16" src="vase/402b5318371e604499909a346695e049-removebg-preview.png">
                  <button type="submit" name="Add_To_Cart" class="card-btn-buy">Add To Cart</button>
                  <p class="card-text">Price: Rs. 2000</p>
                  <div class="stars">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  </div>
                  <input type="hidden" name="Item_Name" value="Vase 6">
                  <input type="hidden" name="Price" value="2000">
                </div>
                </form>
              </div>
              <div class="swiper-slide card card-content-7">
                <form action="manage_cart.php" method="post">
                <div class="card-content">
                  <img class="img-container-17" src="vase/f0b1ca4b230979d236b9f17778e706b0-removebg-preview.png">
                  <button type="submit" name="Add_To_Cart" class="card-btn-buy">Add To Cart</button>
                  <p class="card-text">Price: Rs. 2900</p>
                  <div class="stars">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>                 
                  <span class="fa fa-star"></span>
                  </div>
                  <input type="hidden" name="Item_Name" value="Vase 7">
                  <input type="hidden" name="Price" value="2900">
                </div>
                </form>
              </div>
              <div class="swiper-slide card card-content-8">
                <form action="manage_cart.php" method="post">
                <div class="card-content">
                  <img class="img-container-18" src="vase/1d4e1148666a3ad509c8e010bfb89659-removebg-preview.png">
                  <button type="submit" name="Add_To_Cart" class="card-btn-buy">Add To Cart</button>
                  <p class="card-text">Price: Rs. 2400</p>
                  <div class="stars">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  </div>
                  <input type="hidden" name="Item_Name" value="Vase 8">
                  <input type="hidden" name="Price" value="2400">
                </div>
                </form>
              </div>
              <div class="swiper-slide card card-content-9">
                <form action="manage_cart.php" method="post">
                <div class="card-content">
                  <img class="img-container-19" src="vase/8a38f4cd66eccf449106395e5e3ec615-removebg-preview.png">
                  <button type="submit" name="Add_To_Cart" class="card-btn-buy">Add To Cart</button>
                  <p class="card-text">Price: Rs. 2700</p>
                  <div class="stars">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  </div>
                  <input type="hidden" name="Item_Name" value="Vase 9">
                  <input type="hidden" name="Price" value="2700">
                </div>
                </form>
              </div>
              <div class="swiper-slide card card-content-10">
                <form action="manage_cart.php" method="post">
                <div class="card-content">
                  <img class="img-container-20" src="vase/ed2b301f19a5d83a6311c323e6f3272e-removebg-preview.png">
                  <button type="submit" name="Add_To_Cart" class="card-btn-buy">Add To Cart</button>
                  <p class="card-text">Price: Rs. 2400</p>
                  <div class="stars">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  </div>
                  <input type="hidden" name="Item_Name" value="Vase 10">
                  <input type="hidden" name="Price" value="2400">
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
  </section>
  <!-- <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-pagination"></div> -->
  </section>
  <section class="subscription" id="subscription">
    <div class="flex-item-main">
      <div class="flex-item">
        <div class="flex-item-1">
          <img class="flex-img-1" src="img\263294deda0e37e766ba0ab7d2cbd921.jpg">
          <div class="flex-content">
          <form action="manage_cart.php" method="post">
            <!-- <div class="flex-tags">
              <span class="tag tag--free">Free</span>
            </div> -->
            <p class="flex-title">STARTER PACK</p>
            <ul class="flex-attribute">
              <li><i class="uil uil-check"></i>Get 20% off on 1st buy</li>
              <li><i class="uil uil-check"></i>Guaranteed 2 Day Freshness</li>
              <li><i class="uil uil-check"></i>Assured 24 Hours Delivery</li>
            </ul>
          <button type="submit" name="Add_To_Cart" class="subscription-btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="STARTER PACK">
          <input type="hidden" name="Price" value="3000">
        </form>
          </div>
        </div>
        <div class="flex-item-2">
          <img class="flex-img-2" src="img\a302060d2d44ce8cae40306634a319d6.jpg">
          <div class="flex-content">
          <form action="manage_cart.php" method="post">

            <!-- <div class="flex-tags">
              <span class="tag tag--free">Free</span>
            </div> -->
            <p class="flex-title">COMPLETE PACK</p>
            <ul class="flex-attribute">
              <li><i class="uil uil-check"></i>Get 1 Bouquets FREE/yr</li>
              <li><i class="uil uil-check"></i>Get 40% off on 1st 2 buys</li>
              <li><i class="uil uil-check"></i>Assured 24 Hours Delivery</li>
            </ul>
            <button type="submit" name="Add_To_Cart" class="subscription-btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="COMPLETE PACK">
          <input type="hidden" name="Price" value="5000">
        </form>
          </div>
        </div>
        <div class="flex-item-3">
          <img class="flex-img-3" src="img\7094a236a3dbb68db92b4e0961a2e552.jpg">
          <div class="flex-content">
          <form action="manage_cart.php" method="post">

            <!-- <div class="flex-tags">
              <span class="tag tag--free">Free</span>
            </div> -->
            <p class="flex-title">PREMIUM PACK</p>
            <ul class="flex-attribute">
              <li><i class="uil uil-check"></i>Get 3 Bouquets FREE/yr</li>
              <li><i class="uil uil-check"></i>Get 30% off on each buy</li>
              <li><i class="uil uil-check"></i>Hand-crafted by Designers</li>
              <li><i class="uil uil-check"></i>Guaranteed 5 Day Freshness</li>
              <li><i class="uil uil-check"></i>Assured 3 Hours Delivery</li>
            </ul>
            <button type="submit" name="Add_To_Cart" class="subscription-btn">Add To Cart</button>
          <input type="hidden" name="Item_Name" value="PREMIUM PACK">
          <input type="hidden" name="Price" value="10000">
        </form>
          </div>
          <button type="submit" name="Add_To_Cart" class="">Add To Cart</button>
        </div>
      </div>
    </div>
  </section>
  <section class="countdown-main">
    <div class="countdown">
      <!-- <div class="img-count">
            <img class="counter-img" src="/img/counter (1).png">
            </div> -->
      <div class="countdown-container">
        <div class="title-count">
          <h1 class="count-h1">Sale up to 40%</h1>
          <p class="count-p">It is a long established facr that a reader will be distracted by the
            <br>
            readable content of a page when looking at its layout
          </p>
        </div>
        <div id="timer"></div>
        <a href="#" class="count-btn">Shop now</a>
      </div>
    </div>
  </section>

  <section class="section-testimonials" id="testimonials">
    <div class="testimonial-main">
      <div class="testimonials-container">
        <span class="subheading">Testimonials</span>
        <h2 class="heading-secondary">WE MAKE PEOPLE GENUINELY HAPPY</h2>

        <div class="testimonials">
          <figure class="testimonial">
            <img class="testimonial-img" src="img/dce3ec89db5e9081558fe177598a70a2.jpg" />
            <blockquote class="testimonial-text">
            I ordered the premium orchid bouquet, and there is no doubt about the quality of this particular bunch. A beautiful bouquet of elegant blue orchids with fresh green leaves. Any bouquet from meadowville, is ideal for gifting to someone special. The bouquet was delivered on time, and the flowers were fresh and beautiful. Everything was of high quality. Very well wrapped. The delivery guy was also professional, which was a plus point. I can't wait to have it again. A fantastic online florist for sending flowers to your loved ones. They have a lot of patience. I've always had a positive shopping experience with Meadowville, and they've always exceeded my expectations. I'd recommend it to everyone.
            </blockquote>
            <p class="testimonial-name">&mdash; Rutu Parmar</p>
          </figure>

          <figure class="testimonial">
            <img class="testimonial-img" src="img/dce3ec89db5e9081558fe177598a70a2.jpg" />
            <blockquote class="testimonial-text">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium cum at, in sint quisquam doloribus
              quos odio cumque, tenetur reprehenderit iste libero debitis quas excepturi, est dolores dicta aliquam
              harum!
            </blockquote>
            <p class="testimonial-name">&mdash; Rishi Patel</p>
          </figure>

          <figure class="testimonial">
            <img class="testimonial-img" src="img/dce3ec89db5e9081558fe177598a70a2.jpg" />
            <blockquote class="testimonial-text">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium cum at, in sint quisquam doloribus
              quos odio cumque, tenetur reprehenderit iste libero debitis quas excepturi, est dolores dicta aliquam
              harum!
            </blockquote>
            <p class="testimonial-name">&mdash; Rishi Patel</p>
          </figure>
        </div>
      </div>

      <div class="gallery">
        <figure class="gallery-item">
          <img src="img/bouquets-img/05793dc336374900bf86d7e0f7c0cd43.jpg" alt="Photo of beautifully
        arranged food" />
          <!-- <figcaption>Caption</figcaption> -->
        </figure>
        <figure class="gallery-item">
          <img src="img/bouquets-img/139f47475adacf0e2f7caf0e33455778.jpg" alt="Photo of beautifully
        arranged food" />
        </figure>
        <figure class="gallery-item">
          <img src="img/bouquets-img/33975d135ea8403828cbacd42997e344.jpg" alt="Photo of beautifully
        arranged food" />
        </figure>
        <figure class="gallery-item">
          <img src="img/bouquets-img/3cfeb12426a039d9b96e1e6e91af0be1.jpg" alt="Photo of beautifully
        arranged food" />
        </figure>
        <figure class="gallery-item">
          <img src="img/bouquets-img/55868c9917eb978bcc6f55c738076753.jpg" alt="Photo of beautifully
        arranged food" />
        </figure>
        <figure class="gallery-item">
          <img src="img/bouquets-img/eba42ac8f01ed8c7a733c80b33c75159.jpg" alt="Photo of beautifully
        arranged food" />
        </figure>
        <figure class="gallery-item">
          <img src="img/bouquets-img/ca8cb19db00be00ccdae6a458369c753.jpg" alt="Photo of beautifully
        arranged food" />
        </figure>
        <figure class="gallery-item">
          <img src="img/bouquets-img/73ff4daf26337e42870da58c30f0a2ca.jpg" alt="Photo of beautifully
        arranged food" />
        </figure>
        <figure class="gallery-item">
          <img src="img/bouquets-img/55868c9917eb978bcc6f55c738076753.jpg" alt="Photo of beautifully
        arranged food" />
        </figure>
        <figure class="gallery-item">
          <img src="img/bouquets-img/c09b2bf9fc9e35a946848fc2c5933ee5.jpg" alt="Photo of beautifully
        arranged food" />
        </figure>
        <figure class="gallery-item">
          <img src="img/bouquets-img/9fa0d1a007730f73b884d9a0623c9e63.jpg" alt="Photo of beautifully
        arranged food" />
        </figure>
        <figure class="gallery-item">
          <img src="img/bouquets-img/cce4af0021813bb56ed42ee78431bca1.jpg" alt="Photo of beautifully
        arranged food" />
        </figure>
      </div>
    </div>
  </section>
  <footer class="footer-main" id="footer-section">
    <div class="footer">
      <div class="container grid grid--footer">
        <div class="logo-col">
          <div class="footer-logo">
            <img src="img/butterfly-made-of-lotus-flower-3872ld-removebg-preview (1).png" class="nav-logo">
            <h1 class="logo-des">Meadow ville</h1>
          </div>

          <ul class="social-links">
            <li>
              <a class="footer-link-1" href="#">
                <i class="uil uil-instagram social-icon"></i>
              </a>
            </li>
            <li>
              <a class="footer-link-1" href="#">
                <i class="uil uil-facebook social-icon"></i>
              </a>
            </li>
            <li>
              <a class="footer-link-1" href="#">
                <i class="uil uil-twitter social-icon"></i>
              </a>
            </li>
          </ul>

          <p class="copyright">
            Copyright &copy; <span class="year">2027</span> by Meadow ville,<br>Inc.
            All rights reserved.
          </p>
        </div>

        <div class="address-col">
          <p class="footer-heading">Contact us</p>
          <address class="contacts">
            <p class="address">
              Lorem ipsum dolor sit amet consectetur adipisicing.
            </p>
            <p>
              <a class="footer-link" href="tel:415-201-6370">415-201-6370</a><br />
              <a class="footer-link" href="mailto:hello@flowerstreet.com">hello@flowerstreet.com</a>
            </p>
          </address>
        </div>

        <nav class="nav-col">
          <p class="footer-heading">Account</p>
          <ul class="footer-nav">
            <li><a class="footer-link" href="#">Create account</a></li>
            <li><a class="footer-link" href="#">Sign in</a></li>
            <li><a class="footer-link" href="#">iOS app</a></li>
            <li><a class="footer-link" href="#">Android app</a></li>
          </ul>
        </nav>

        <nav class="nav-col">
          <p class="footer-heading">Company</p>
          <ul class="footer-nav">
            <li><a class="footer-link" href="#">About Meadow ville</a></li>
            <li><a class="footer-link" href="#">For Business</a></li>
            <li><a class="footer-link" href="#">Pricing</a></li>
            <li><a class="footer-link" href="#">Careers</a></li>
          </ul>
        </nav>

        <nav class="nav-col">
          <p class="footer-heading">Resources</p>
          <ul class="footer-nav">
            <li><a class="footer-link" href="#">Blog</a></li>
            <li><a class="footer-link" href="#">Help center</a></li>
            <li><a class="footer-link" href="#">Privacy & terms</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </footer>

  <script src="/swiper-bundle.min.js"></script>
  <script src="/countdown.js"></script>
  <script src="/main.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 5,
      spaceBetween: 30,
      slidesPerGroup: 5,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
  <script>
    // Swiper slider
var swiper = new Swiper(".bg-slider-thumbs", {
    loop: true,
    spaceBetween: 0,
    slidesPerView: 0,
  });
  var swiper2 = new Swiper(".bg-slider", {
    loop: true,
    spaceBetween: 0,
    thumbs: {
      swiper: swiper,
    },
  });

    </script>
    <script>
      function updateTimer() {
    future = Date.parse("nov 22 , 2022 01:30:00");
 now = new Date();
 diff = future - now;

 days = Math.floor(diff / (1000 * 60 * 60 * 24));
 hours = Math.floor(diff / (1000 * 60 * 60));
 mins = Math.floor(diff / (1000 * 60));
 secs = Math.floor(diff / 1000);

 d = days;
 h = hours - days * 24;
 m = mins - hours * 60;
 s = secs - mins * 60;

 document.getElementById("timer")
  .innerHTML =
  '<div>' + d + '<span>Days</span></div>' +
  '<div>' + h + '<span>Hours</span></div>' +
  '<div>' + m + '<span>Minutes</span></div>' +
  '<div>' + s + '<span>Seconds</span></div>';
}
setInterval('updateTimer()', 1000);
      </script>
</body>

</html>