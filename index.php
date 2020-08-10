<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sam Workshop</title>
    <meta name="theme-color" content="#fff">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="img/favicons/favicon.ico" type="image/x-icon">
    <link rel="icon" sizes="16x16" href="img/favicons/favicon-16x16.png" type="image/png">
    <link rel="icon" sizes="32x32" href="img/favicons/favicon-32x32.png" type="image/png">
    <link rel="apple-touch-icon-precomposed" href="img/favicons/apple-touch-icon-precomposed.png">
    <link rel="apple-touch-icon" href="img/favicons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="img/favicons/apple-touch-icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon-180x180.png">
    <link rel="apple-touch-icon" sizes="1024x1024" href="img/favicons/apple-touch-icon-1024x1024.png">
	<link rel="stylesheet" href="styles/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/fullpage.min.css" integrity="sha512-8M8By+q+SldLyFJbybaHoAPD6g07xyOcscIOQEypDzBS+sTde5d6mlK2ANIZPnSyxZUqJfCNuaIvjBUi8/RS0w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
	<?php
	if(isset($_GET['thanks'])) {
	    echo '
		<div class="top_thank" id="top_thank">
			<i class="fas fa-thumbs-up"></i> 
			Спасибо за отправку Вашего предложения!<br />
			Я отреагирую на него ответным  письмом.
		</div>
	    ';
	}
	?>
	<div class="section_main" id="section_main">
		<div class="main" id="section1">
			<div class="arrow_down"><a href="#section2"><i class="fas fa-chevron-down" style="margin-right: 10px;"></i>Проекты</a></div>
			<div class="container">
				<!-- ГЛАВНАЯ ЧАСТЬ -->
				<div class="row" style="justify-content: center;">
					<div class="col-sm-12 only-desk-class">
						<div id="photo" class="photo_container"><img src="img/photo.jpg" alt=""></div>
						<div class="popup" id="popup-1">
						  <div class="overlay"  onclick="togglePopup()"></div>
						  <div class="content">
						    <div class="close-btn" onclick="togglePopup()"><span style="margin-top: -3px;">&times;</span></div>
						    <div id="dop" class="about_dop">
								<table cellspacing="0" cellpadding="0" class="maket">
									<tr style="border-bottom: 1px solid black;"> 
										<td class="leftcol" style="font-weight: bold; border-bottom: 1px solid black;">Окончил:</td>
										<td class="rightcol"> Балтийский Федеральный Университет (2020) с отличием "Менеджмент - Маркетинг"</td>
									</tr>
									<tr> 
										<td class="leftcol" style="font-weight: bold;"> Курсы: </td>
										<td class="rightcol">
											<li><i class="icon fas fa-check-circle"></i>Paul Hudson "Hacking with Swift"</li>
											<li><i class="icon fas fa-check-circle"></i>Paul Hudson "Hacking  with SwiftUI"</li>
											<li><i class="icon fas fa-check-circle"></i>Paul Hudson "100 days of Swift"</li>
											<li><i class="icon fas fa-check-circle"></i>Angela Yu - "iOS 13 & Swift 5 - The complete iOS App Dev Bootcamp"</li>
											<li><i class="icon fas fa-check-circle"></i>Высшая Школа Экономики - "Python - базовый курс"</li>
											<li><i class="icon fas fa-check-circle"></i>"Введение в Машинное Обучение", "Цифровой маркетинг", "Методология Agile" и др.</li>
										</td>
									</tr>
								</table>
							</div>
						  </div>
						</div>
						<div class="main_name">Медведев Семен</div>
						<div class="main_description">iOS - разработчик со стажем в 1 год, стремлением развиваться и создавать качественные продукты</div>
					</div>
				</div>
				<div class="row"  style="justify-content: center;">
					<div class="col-sm-12 tiny-size-btns">
						<div class="btn_container" id="menu">
	                      <button id="openPOPUP" class="skewBtn">Обо мне</button>
	                       	<a href="#section2"><button class="skewBtn">Проекты</button></a>
	                      	<a href="#section3"><button class="skewBtn">Связаться</button></a>
	                      	
	                      <a href="lessons.php"><button class="skewBtn">Уроки</button></a>
	                    </div>
	                </div>
				</div>
			</div>
		</div>
	</div>
	<div class="projects">
		<div class="projects_main">
			<div id="section2" class="animatedBg"></div>
		    <div class="arrow_up"><a href="#section1"><i class="fas fa-chevron-up" style="margin-right: 10px;"></i>  Главная</a></div>
		    <div class="arrow_down"><a href="#section3"><i class="fas fa-chevron-down" style="margin-right: 10px;"></i>  Связаться</a></div>
			<div class="projects_menu_min">
				<li>
					<i class="fas fa-chevron-down" style="margin-right: 5px;"></i> Мои Проекты
					<div class="projects_list_min">
						<ul>
							<li class="tapPr" data-filter="project3">
								Aspect <span class="git_min"><a href="https://github.com/Simon-developer/Aspect">Git</a></span>
							</li>
							<li class="tapPr" data-filter="project2">
								AdEngine iOS <span class="git_min"><a href="https://github.com/Simon-developer/AdEngine">Git</a></span>
							</li>
							<li class="tapPr" data-filter="project1">
								AdEngine PC <span class="git_min"><a href="https://github.com/Simon-developer/AdEngine">Git</a></span>
							</li>						
						</ul>
					</div>
				</li>
			</div>
			
			<div class="container">
	            <div class="row">
					<div class="projects_left col-lg-4 hideMin">
		                <div class="projectsTitle pTitleHide">Мои Проекты</div>
		                <ul>
		                    <li class="project activeProject projectTitleSize tapPr" data-filter="project3">
		                    	Aspect
		                    	<a href="https://github.com/Simon-developer/Aspect">
		                    		<svg enable-background="new 0 0 24 24" height="30" viewBox="0 0 24 24" width="30" xmlns="http://www.w3.org/2000/svg"><path id="github-min" d="m12 .5c-6.63 0-12 5.28-12 11.792 0 5.211 3.438 9.63 8.205 11.188.6.111.82-.254.82-.567 0-.28-.01-1.022-.015-2.005-3.338.711-4.042-1.582-4.042-1.582-.546-1.361-1.335-1.725-1.335-1.725-1.087-.731.084-.716.084-.716 1.205.082 1.838 1.215 1.838 1.215 1.07 1.803 2.809 1.282 3.495.981.108-.763.417-1.282.76-1.577-2.665-.295-5.466-1.309-5.466-5.827 0-1.287.465-2.339 1.235-3.164-.135-.298-.54-1.497.105-3.121 0 0 1.005-.316 3.3 1.209.96-.262 1.98-.392 3-.398 1.02.006 2.04.136 3 .398 2.28-1.525 3.285-1.209 3.285-1.209.645 1.624.24 2.823.12 3.121.765.825 1.23 1.877 1.23 3.164 0 4.53-2.805 5.527-5.475 5.817.42.354.81 1.077.81 2.182 0 1.578-.015 2.846-.015 3.229 0 .309.21.678.825.56 4.801-1.548 8.236-5.97 8.236-11.173 0-6.512-5.373-11.792-12-11.792z" fill="#212121"/></svg>
		                    	</a>
		                    </li>
		                    <li class="project projectTitleSize tapPr" data-filter="project2">
		                    	AdEngine iOS
								<a href="https://github.com/Simon-developer/AdEngine">
		                    		<svg enable-background="new 0 0 24 24" height="30" viewBox="0 0 24 24" width="30" xmlns="http://www.w3.org/2000/svg"><path id="github-min" d="m12 .5c-6.63 0-12 5.28-12 11.792 0 5.211 3.438 9.63 8.205 11.188.6.111.82-.254.82-.567 0-.28-.01-1.022-.015-2.005-3.338.711-4.042-1.582-4.042-1.582-.546-1.361-1.335-1.725-1.335-1.725-1.087-.731.084-.716.084-.716 1.205.082 1.838 1.215 1.838 1.215 1.07 1.803 2.809 1.282 3.495.981.108-.763.417-1.282.76-1.577-2.665-.295-5.466-1.309-5.466-5.827 0-1.287.465-2.339 1.235-3.164-.135-.298-.54-1.497.105-3.121 0 0 1.005-.316 3.3 1.209.96-.262 1.98-.392 3-.398 1.02.006 2.04.136 3 .398 2.28-1.525 3.285-1.209 3.285-1.209.645 1.624.24 2.823.12 3.121.765.825 1.23 1.877 1.23 3.164 0 4.53-2.805 5.527-5.475 5.817.42.354.81 1.077.81 2.182 0 1.578-.015 2.846-.015 3.229 0 .309.21.678.825.56 4.801-1.548 8.236-5.97 8.236-11.173 0-6.512-5.373-11.792-12-11.792z" fill="#212121"/></svg>
		                    	</a>
		                    </li>
		                    <li class="project projectTitleSize  tapPr" data-filter="project1">
		                    	AdEngine PC 
		                    	<a href="https://github.com/Simon-developer/AdEngine">
		                    		<svg enable-background="new 0 0 24 24" height="30" viewBox="0 0 24 24" width="30" xmlns="http://www.w3.org/2000/svg"><path id="github-min" d="m12 .5c-6.63 0-12 5.28-12 11.792 0 5.211 3.438 9.63 8.205 11.188.6.111.82-.254.82-.567 0-.28-.01-1.022-.015-2.005-3.338.711-4.042-1.582-4.042-1.582-.546-1.361-1.335-1.725-1.335-1.725-1.087-.731.084-.716.084-.716 1.205.082 1.838 1.215 1.838 1.215 1.07 1.803 2.809 1.282 3.495.981.108-.763.417-1.282.76-1.577-2.665-.295-5.466-1.309-5.466-5.827 0-1.287.465-2.339 1.235-3.164-.135-.298-.54-1.497.105-3.121 0 0 1.005-.316 3.3 1.209.96-.262 1.98-.392 3-.398 1.02.006 2.04.136 3 .398 2.28-1.525 3.285-1.209 3.285-1.209.645 1.624.24 2.823.12 3.121.765.825 1.23 1.877 1.23 3.164 0 4.53-2.805 5.527-5.475 5.817.42.354.81 1.077.81 2.182 0 1.578-.015 2.846-.015 3.229 0 .309.21.678.825.56 4.801-1.548 8.236-5.97 8.236-11.173 0-6.512-5.373-11.792-12-11.792z" fill="#212121"/></svg>
		                    	</a>
		                    </li>
		                </ul>
		            </div>
		            <div class="projects_right col-lg-8">
		            	<div class="project_detail" id="project3">
		                	<div class="project_detail_wrapper_shadow">
		                		<div class="slider">
			                		<div class="slider__item"><img src="img/sliders/aspect/1.png" alt=""></div>
			                		<div class="slider__item"><img src="img/sliders/aspect/2.png" alt=""></div>
			                		<div class="slider__item"><img src="img/sliders/aspect/3.png" alt=""></div>
			                	</div>
							
			                    <div class="project_description">
			                    	<div class="project_description_text">
			                    		<h3>Aspect</h3>
		                        		<p>Приложение для сьемки и обработки фото для постов в Instagram c уникальными анимациями и эффектами, в процессе разработки.</p>
			                    	</div>
			                    	<div class="project_description_specs">
			                    		<h3>Технологии</h3>
			                    		<ul>
			                    			<li><i class="icon fas fa-check-circle"></i>AVFoundation</li>
			                    			<li><i class="icon fas fa-check-circle"></i>UIKit+SwiftUI в одном экране</li>
			                    			<li><i class="icon fas fa-check-circle"></i>Combine</li>
			                    			<li><i class="icon fas fa-check-circle"></i>User Access (Dynamic interfaces)</li>
			                    		</ul>
			                    	</div>
			                    </div>
		                	</div>
		                </div>
		                <div class="project_detail" id="project2">
		                	<div class="project_detail_wrapper_shadow">
		                		<div class="slider">
			                		<div class="slider__item"><img src="img/sliders/adengineios/1.png" alt=""></div>
			                		<div class="slider__item"><img src="img/sliders/adengineios/2.png" alt=""></div>
			                		<div class="slider__item"><img src="img/sliders/adengineios/3.png" alt=""></div>
			                		<div class="slider__item"><img src="img/sliders/adengineios/4.png" alt=""></div>
			                		<div class="slider__item"><img src="img/sliders/adengineios/5.png" alt=""></div>
			                		<div class="slider__item"><img src="img/sliders/adengineios/6.jpg" alt=""></div>
			                	</div>
							
			                    <div class="project_description">
			                    	<div class="project_description_text">
			                    		<h3>AdEngine iOS</h3>
			                        	<p>Приложение-кампаньон, для удобного доступа рядовых пользователей к данным, собираемым AdEngine PC. Приложение помогает подбирать наиболее эффективные варианты рекламных размещений на платформе YouTube, в зависимости от параметров канала, блоггера и  аудитории.</p>
			                    	</div>
			                    	<div class="project_description_specs">
			                    		<h3>Технологии</h3>
			                    		<ul>
			                    			<li><i class="icon fas fa-check-circle"></i>CocoaPods</li>
			                    			<li><i class="icon fas fa-check-circle"></i>UILayoutGuide</li>
			                    			<li><i class="icon fas fa-check-circle"></i>Lottie анимации</li>
			                    			<li><i class="icon fas fa-check-circle"></i>UIBezierPath</li>
			                    			<li><i class="icon fas fa-check-circle"></i>CoreAnimation</li>
			                    			<li><i class="icon fas fa-check-circle"></i>OOP</li>
			                    		</ul>
			                    	</div>
			                    </div>
		                	</div>
		                </div>
		                <div class="project_detail" id="project1">
		                	<div class="project_detail_wrapper_shadow">
		                		<div class="slider">
			                		<div class="slider__item"><img src="img/sliders/adenginepc/1.png" alt=""></div>
			                		<div class="slider__item"><img src="img/sliders/adenginepc/2.png" alt=""></div>
			                		<div class="slider__item"><img src="img/sliders/adenginepc/3.png" alt=""></div>
			                		<div class="slider__item"><img src="img/sliders/adenginepc/4.png" alt=""></div>
			                		<div class="slider__item"><img src="img/sliders/adenginepc/5.png" alt=""></div>
			                		<div class="slider__item"><img src="img/sliders/adenginepc/6.png" alt=""></div>
			                		<div class="slider__item"><img src="img/sliders/adenginepc/7.png" alt=""></div>
			                	</div>
							
			                    <div class="project_description">
			                    	<div class="project_description_text">
			                    		<h3>AdEngine PC</h3>
		                        		<p>Приложение для рекламодетелей по анализу каналов на YouTube. По названию канала, приложение находит всю доступную информацию. Программа проводит скрининг видео на канале и анализирует оставленные комментарии, классифицируя их как положительные и отрицательные при помощи нейронной сети для выделения отношения пользователей к контенту. Кроме того, из группы канала Вконтакте, программа "AdEngine" подгружает информацию о пользователях, предоставляя срез статистической информации о целевой аудитории сообщества канала. <br> Цель программы - повысить возврат инвестиций на рекламу в интернете.</p>
			                    	</div>
			                    	<div class="project_description_specs">
			                    		<h3>Технологии</h3>
			                    		<ul>
			                    			<li><i class="icon fas fa-check-circle"></i>Machine Learning (TensorFlow)</li>
			                    			<li><i class="icon fas fa-check-circle"></i>Cluster Analysis</li>
			                    			<li><i class="icon fas fa-check-circle"></i>Tkinter</li>
			                    			<li><i class="icon fas fa-check-circle"></i>Google Data API, VK API</li>
			                    			<li><i class="icon fas fa-check-circle"></i>MySQL</li>
			                    			<li><i class="icon fas fa-check-circle"></i>Python 3.7</li>
			                    		</ul>
			                    	</div>
			                    </div>
		                	</div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
	<div class="contact" id="section3">
		<div class="contact_main">
			<div class="arrow_up"><a href="#section2"><i class="fas fa-chevron-up" style="margin-right: 10px;"></i>  Проекты</a></div>
			<div class="container">
	            <div class="row">
	            	<div class="col-md-6 px-md-5">
	            		<div class="projectsTitle ar" style="">Связаться в сети</div>
	            		<div class="nets">
	            			<div class="gradient" style="opacity: 0;">
	            				<svg width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg">
							      <style type="text/css">
							        rect{fill:url(#MyGradient)}
							      </style>
							      <defs>
							        <linearGradient id="MyGradient">
							          <stop offset="5%" stop-color="#F60" />
							          <stop offset="95%" stop-color="#FF6" />
							        </linearGradient>
							      </defs>
							      
							      <rect width="100" height="100"/>
							    </svg>
	            			</div>
	            			
	            			<div class="net">
	            				  <svg enable-background="new 0 0 24 24" height="90" viewBox="0 0 24 24" width="90" xmlns="http://www.w3.org/2000/svg"><path id="github" d="m12 .5c-6.63 0-12 5.28-12 11.792 0 5.211 3.438 9.63 8.205 11.188.6.111.82-.254.82-.567 0-.28-.01-1.022-.015-2.005-3.338.711-4.042-1.582-4.042-1.582-.546-1.361-1.335-1.725-1.335-1.725-1.087-.731.084-.716.084-.716 1.205.082 1.838 1.215 1.838 1.215 1.07 1.803 2.809 1.282 3.495.981.108-.763.417-1.282.76-1.577-2.665-.295-5.466-1.309-5.466-5.827 0-1.287.465-2.339 1.235-3.164-.135-.298-.54-1.497.105-3.121 0 0 1.005-.316 3.3 1.209.96-.262 1.98-.392 3-.398 1.02.006 2.04.136 3 .398 2.28-1.525 3.285-1.209 3.285-1.209.645 1.624.24 2.823.12 3.121.765.825 1.23 1.877 1.23 3.164 0 4.53-2.805 5.527-5.475 5.817.42.354.81 1.077.81 2.182 0 1.578-.015 2.846-.015 3.229 0 .309.21.678.825.56 4.801-1.548 8.236-5.97 8.236-11.173 0-6.512-5.373-11.792-12-11.792z" fill="#212121"/></svg>
	            			</div>
	            			<div class="net">
								<svg enable-background="new 0 0 100 100" height="100" id="Layer_1" version="1.1" viewBox="0 0 100 100" width="100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><circle id="vk-circle" cx="50" cy="50" fill="#4A74A5" r="45"/><path id="vk-inner" clip-rule="evenodd" d="M42.275,38.826c0.206-0.547,0.6-0.885,1.082-1.123   c0.926-0.455,1.925-0.594,2.937-0.574c1.438,0.029,2.875,0.123,4.312,0.184c0.646,0.027,1.289,0.055,1.9,0.301   c0.914,0.367,1.397,1.062,1.42,2.021c0.018,0.781-0.094,1.564-0.12,2.348c-0.058,1.67-0.13,3.338-0.126,5.006   c0.002,0.527,0.224,1.057,0.363,1.578c0.04,0.148,0.139,0.281,0.229,0.41c0.344,0.498,0.464,0.494,0.957,0.182   c0.916-0.58,1.592-1.373,2.212-2.252c0.839-1.188,1.587-2.424,2.209-3.734c0.619-1.307,1.243-2.613,1.825-3.939   c0.289-0.662,0.735-0.941,1.451-0.938c2.696,0.018,5.394,0.016,8.09,0.004c0.866-0.004,1.485,0.736,1.288,1.586   c-0.206,0.896-0.61,1.699-1.086,2.469c-1.339,2.172-2.824,4.238-4.52,6.15c-0.596,0.672-1.132,1.389-1.408,2.262   c-0.3,0.951-0.109,1.785,0.599,2.492c1.255,1.25,2.542,2.469,3.764,3.752c0.722,0.762,1.361,1.604,1.995,2.441   c0.408,0.535,0.668,1.152,0.594,1.855c-0.08,0.783-0.479,1.189-1.264,1.23c-1.519,0.08-3.042,0.139-4.562,0.207   c-0.886,0.041-1.77,0.088-2.655,0.125c-0.707,0.029-1.337-0.229-1.937-0.572c-0.954-0.547-1.751-1.291-2.535-2.049   c-0.812-0.783-1.565-1.615-2.171-2.576c-0.384-0.609-1.455-0.941-2.129-0.689c-0.522,0.195-0.771,0.619-0.824,1.148   c-0.088,0.871-0.136,1.748-0.218,2.619c-0.1,1.074-0.773,1.74-1.843,1.885c-2.107,0.281-4.198,0.176-6.277-0.23   c-1.525-0.301-2.843-1.035-4.099-1.926c-1.719-1.215-3.18-2.701-4.548-4.277c-0.709-0.82-1.331-1.721-1.942-2.621   c-1.947-2.861-3.789-5.789-5.402-8.855c-0.773-1.469-1.547-2.939-1.955-4.564c-0.092-0.365-0.14-0.742-0.214-1.113   c-0.036-0.184,0.032-0.32,0.2-0.373c0.438-0.135,0.876-0.338,1.321-0.355c1.43-0.061,2.86-0.053,4.29-0.062   c0.618-0.002,1.237,0.061,1.854,0.027c0.829-0.043,1.383,0.34,1.741,1.033c0.357,0.695,0.665,1.418,1.005,2.123   c1.218,2.533,2.537,5.006,4.251,7.244c0.254,0.33,0.631,0.592,0.999,0.803c0.438,0.252,0.823,0.117,1.092-0.312   c0.315-0.512,0.464-1.084,0.474-1.684c0.026-1.689,0.076-3.379,0.058-5.066c-0.021-1.742-0.886-2.902-2.524-3.529   C42.386,38.879,42.344,38.857,42.275,38.826z" fill="#FFFFFF" fill-rule="evenodd"/></g></svg>
	            			</div>
	            			<div class="net">
	            				<svg height="100" id="Layer_1" style="enable-background:new 0 0 56.7 56.7;" version="1.1" viewBox="0 0 56.7 56.7" width="100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><circle id="instagram-inner" cx="28.1" cy="30" r="4.4"/><path id="instagram-inner" d="M33.6,19.2h-11c-1.6,0-3,0.5-3.9,1.4c-0.9,0.9-1.4,2.3-1.4,3.9v11c0,1.6,0.5,3,1.5,4c1,0.9,2.3,1.4,3.9,1.4h10.9   c1.6,0,3-0.5,3.9-1.4c1-0.9,1.5-2.3,1.5-3.9v-11c0-1.6-0.5-2.9-1.4-3.9C36.6,19.7,35.3,19.2,33.6,19.2z M28.1,36.8   c-3.8,0-6.8-3.1-6.8-6.8c0-3.8,3.1-6.8,6.8-6.8S35,26.2,35,30C35,33.8,31.9,36.8,28.1,36.8z M35.2,24.5c-0.9,0-1.6-0.7-1.6-1.6   s0.7-1.6,1.6-1.6s1.6,0.7,1.6,1.6S36.1,24.5,35.2,24.5z"/><path id="instagram-inner" d="M28.3,5.2c-13.6,0-24.6,11-24.6,24.6c0,13.6,11,24.6,24.6,24.6c13.6,0,24.6-11,24.6-24.6C53,16.2,41.9,5.2,28.3,5.2z    M41.4,35.6c0,2.3-0.8,4.3-2.2,5.7c-1.4,1.4-3.4,2.1-5.6,2.1H22.7c-2.2,0-4.2-0.7-5.6-2.1c-1.5-1.4-2.2-3.4-2.2-5.7v-11   c0-4.6,3.1-7.8,7.8-7.8h11c2.3,0,4.2,0.8,5.6,2.2c1.4,1.4,2.1,3.3,2.1,5.6V35.6z"/></g></svg>
	            			</div>

	                		
	            		</div>
	            		<div class="contacts_min">
	                			<div class="line">
	                				<a href="tel:+79118525713">
	                					+7 911 852 5713 
	                					<i class="ico fas fa-phone"></i>
	                				</a>
	                			</div>
	                			<div class="line">
	                				<a href="mailto:medvedevsmn@gmail.com?subject=%D0%9F%D1%80%D0%B5%D0%B4%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5%2F%D0%B2%D0%BE%D0%BF%D1%80%D0%BE%D1%81%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0%20SamWorkshop.ru">
	                					medvedevsmn@gmail.com 
	                					<i class="ico fas fa-envelope"></i>
	                				</a>
	                			</div>
	                		</div>
	            	</div>
	                <div class="col-md-6 px-md-5">
	                    <div class="projectsTitle al" style="">Прямое сообщение</div>
	                    <form action="mail.php" method="POST">
	                    	<div class="form">
		                    	<div class="name_form">
		                    		<input type="text" name="name" autocomplete="off" required />
		                            <label for="name" class='label-name'>
		                            	<span class="content-name">Ваше  имя</span>
		                            </label>
		                    	</div>
		                    </div>
		                    <div class="form">
		                     	<div class="contact_form">
		                    		<input type="text" name="contact" autocomplete="off" required />
		                            <label for="contact" class='label-name'>
		                            	<span class="content-name">Контакт для связи</span>
		                            </label>
		                    	</div>
		                    </div>

		                    <div class="form2">
		                     	<div class="offer_form">
		                     		<textarea name="offer" autocomplete="off" required></textarea>
		                     		<label for="offer" class='label-offer'>
		                            	<span class="label-offer-text">Ваше предложение / сообщение</span>
		                            </label>
		                    		
		                    	</div>
		                    </div>
		                    <div class="btn_submit">
		                        	<button type="submit" class="skewBtn2 yel">Отправить</button>
		                    </div>
	                    </form>
	                </div>
	            </div>
	        </div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" crossorigin="anonymous"></script>
	<script src="js/nav.js" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/fullpage.min.js" integrity="sha512-Gx/C4x1qubng2MWpJIxTPuWch9O88dhFFfpIl3WlqH0jPHtCiNdYsmJBFX0q5gIzFHmwkPzzYTlZC/Q7zgbwCw==" crossorigin="anonymous"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script defer src="js/particles.min.js"></script>
    <script defer src="js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>