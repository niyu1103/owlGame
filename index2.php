<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>ウララ・アート</title>
<meta name="description" content="">
<link rel="stylesheet" href="http://urara.art.ver0.site/common/css/common.css">
<link rel="stylesheet" href="http://urara.art.ver0.site/common/css/top.css">
</head>
<body>

	<div id="wrapper">

		<main id="main">

			<div class="mainImg">
				<p class="mainCopy">素材という<br>原石</p>
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 730 730">
					<clipPath id="clip">
						<path>
							<animate dur="20s" repeatCount="indefinite" attributeName="d" attributeType="XML" values="M646.05,168.65c-39.73-41.65-106-164-277.14-168.6c-73.21-1.97-177.2,46.44-256.86,107.6c-99,76-107.79,203.12-111,267c-11.23,223.8,67.91,251.72,210,279c57.54,11.05,132,28,249-7c53.22-15.92,188.4-49.62,240-130C743.48,449.01,750.61,278.27,646.05,168.65z;M645.63,168.64c-39.73-41.65-106-164-277.14-168.6c-73.21-1.97-136.2,70.44-215.86,131.6c-99,76-148.79,179.12-152,243c-11.23,223.8,128.37,315.59,272,333c132,16,85-65,202-100c53.22-15.92,173.4-10.62,225-91C743.06,449,750.19,278.25,645.63,168.64z;M519.03,151.64c-39.73-41.65-37-147-208.14-151.6c-73.21-1.97-136.2,70.44-215.86,131.6c-99,76-90.79,246.12-94,310c-11.23,223.8,70.37,248.59,214,266c132,16,161-53,278-88c53.22-15.92,197.13-90.62,192-186C675.03,247.64,623.58,261.25,519.03,151.64z;M604.01,113.64c-39.73-41.65-111-109-282.14-113.6c-73.21-1.97-124.86,57.6-215.86,131.6c-96.83,78.74-138,214-78,326c105.82,197.52,120.37,218.59,264,236c132,16,175-33,292-68c53.22-15.92,117.13-96.62,112-192C686.01,247.64,708.57,223.26,604.01,113.64z;M646.05,168.65c-39.73-41.65-106-164-277.14-168.6c-73.21-1.97-177.2,46.44-256.86,107.6c-99,76-107.79,203.12-111,267c-11.23,223.8,67.91,251.72,210,279c57.54,11.05,132,28,249-7c53.22-15.92,188.4-49.62,240-130C743.48,449.01,750.61,278.27,646.05,168.65z;"></animate>
						</path>
					</clipPath>
					<?php
						$instagram = null;
						$instagram_business_id = '17841444552474741'; // InstagramビジネスアカウントのID
						$access_token = 'EAADuJnbDI2ABAI9XiIVYXGFcuMwq4ZCiBXHOsbrHk5zgEz369XilTGzcf6ZBZAMuc4CoV75ZAglEJ07uvSC8aF2yGjMRh1W5YI7H6u5OQKQwZBUPYKMp1zxiZC4kAHyaJyF2c01Th55ZBbUsW07Qu0cDoVv3xDFtzwkugFsUVZCdPErDs8XYGtVmZCYlZBXyKZCkQgZD'; // 有効期限無期限のアクセストークン
						$hashtag_id = '18056553076230280'; // ハッシュタグ
						$post_count = 1;
						$query = 'name,media.limit(' . $post_count. '){caption,like_count,media_url,permalink,timestamp,username,comments_count}';
						$get_url = 'https://graph.facebook.com/v9.0/'. $hashtag_id . '/recent_media?user_id=' . $instagram_business_id . '&fields=' . $query . '&access_token=' . $access_token;
						$curl = curl_init();
						curl_setopt($curl, CURLOPT_URL, $get_url);
						curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
						curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
						$response = curl_exec($curl);
						curl_close($curl);
						if($response){
							$instagram = json_decode($response);
							if(isset($instagram->error)){
								$instagram = null;
							}
						}
					?>
					<?php
					foreach((array)$instagram->media->data as $post):
						$caption = $post->caption;
						$caption = preg_replace('/\n/', '<br>', $caption);
					?>

					<?php endforeach; ?>
					<image clip-path="url(#clip)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://scontent-nrt1-1.cdninstagram.com/v/t51.2885-15/150702872_424964702143600_922028931706965778_n.jpg?_nc_cat=101&ccb=3&_nc_sid=8ae9d6&_nc_ohc=MkEffO5YHpoAX8fHWR-&_nc_ht=scontent-nrt1-1.cdninstagram.com&oh=64a36181e63ccc00c1ade3c16994b7c9&oe=604E4F0C" width="100%" height="100%"></image>
				</svg>
			</div>


			<ul class="topList">
				<li>
					<a href="/profile/">
						<div class="text">
							<h2 class="subHead">Profile</h2>
							<p>素材の変化する面白さ、バランスの美しさを大切にした作品作りをお伝えしていきます。</p>

							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 730 730">
								<defs>
							        <linearGradient id="frame-gradient01" x1="50%" y1="0%" x2="50%" y2="100%">
							        <?php $g_color = ['#cc6969', '#bfe5ae', '#1886a1']; ?>
							            <stop offset="0%" stop-color="<?php echo $g_color[0]; ?>">
							                <animate attributeName="stop-color" values="<?php echo $g_color[0]; ?>; <?php echo $g_color[1]; ?>; <?php echo $g_color[2]; ?>; <?php echo $g_color[0]; ?>" dur="10s" repeatCount="indefinite"></animate>
							            </stop>
							            <stop offset="1000%" stop-color="<?php echo $g_color[1]; ?>">
							                <animate attributeName="stop-color" values="<?php echo $g_color[1]; ?>; <?php echo $g_color[2]; ?>; <?php echo $g_color[0]; ?>; <?php echo $g_color[1]; ?>" dur="10s" repeatCount="indefinite"></animate>
							            </stop>
							        </linearGradient>
							    </defs>
							    <path fill="url('#frame-gradient01')">
									<animate dur="100s" repeatCount="indefinite" attributeName="d" attributeType="XML" values="M646.05,168.65c-39.73-41.65-106-164-277.14-168.6c-73.21-1.97-177.2,46.44-256.86,107.6c-99,76-107.79,203.12-111,267c-11.23,223.8,67.91,251.72,210,279c57.54,11.05,132,28,249-7c53.22-15.92,188.4-49.62,240-130C743.48,449.01,750.61,278.27,646.05,168.65z;M645.63,168.64c-39.73-41.65-106-164-277.14-168.6c-73.21-1.97-136.2,70.44-215.86,131.6c-99,76-148.79,179.12-152,243c-11.23,223.8,128.37,315.59,272,333c132,16,85-65,202-100c53.22-15.92,173.4-10.62,225-91C743.06,449,750.19,278.25,645.63,168.64z;M519.03,151.64c-39.73-41.65-37-147-208.14-151.6c-73.21-1.97-136.2,70.44-215.86,131.6c-99,76-90.79,246.12-94,310c-11.23,223.8,70.37,248.59,214,266c132,16,161-53,278-88c53.22-15.92,197.13-90.62,192-186C675.03,247.64,623.58,261.25,519.03,151.64z;M604.01,113.64c-39.73-41.65-111-109-282.14-113.6c-73.21-1.97-124.86,57.6-215.86,131.6c-96.83,78.74-138,214-78,326c105.82,197.52,120.37,218.59,264,236c132,16,175-33,292-68c53.22-15.92,117.13-96.62,112-192C686.01,247.64,708.57,223.26,604.01,113.64z;M646.05,168.65c-39.73-41.65-106-164-277.14-168.6c-73.21-1.97-177.2,46.44-256.86,107.6c-99,76-107.79,203.12-111,267c-11.23,223.8,67.91,251.72,210,279c57.54,11.05,132,28,249-7c53.22-15.92,188.4-49.62,240-130C743.48,449.01,750.61,278.27,646.05,168.65z;"></animate>
								</path>
							</svg>
						</div>
						<div class="img">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 730 730">
								<clipPath id="clip">
									<path>
										<animate dur="26s" repeatCount="indefinite" attributeName="d" attributeType="XML" values="M646.05,168.65c-39.73-41.65-106-164-277.14-168.6c-73.21-1.97-177.2,46.44-256.86,107.6c-99,76-107.79,203.12-111,267c-11.23,223.8,67.91,251.72,210,279c57.54,11.05,132,28,249-7c53.22-15.92,188.4-49.62,240-130C743.48,449.01,750.61,278.27,646.05,168.65z;M645.63,168.64c-39.73-41.65-106-164-277.14-168.6c-73.21-1.97-136.2,70.44-215.86,131.6c-99,76-148.79,179.12-152,243c-11.23,223.8,128.37,315.59,272,333c132,16,85-65,202-100c53.22-15.92,173.4-10.62,225-91C743.06,449,750.19,278.25,645.63,168.64z;M519.03,151.64c-39.73-41.65-37-147-208.14-151.6c-73.21-1.97-136.2,70.44-215.86,131.6c-99,76-90.79,246.12-94,310c-11.23,223.8,70.37,248.59,214,266c132,16,161-53,278-88c53.22-15.92,197.13-90.62,192-186C675.03,247.64,623.58,261.25,519.03,151.64z;M604.01,113.64c-39.73-41.65-111-109-282.14-113.6c-73.21-1.97-124.86,57.6-215.86,131.6c-96.83,78.74-138,214-78,326c105.82,197.52,120.37,218.59,264,236c132,16,175-33,292-68c53.22-15.92,117.13-96.62,112-192C686.01,247.64,708.57,223.26,604.01,113.64z;M646.05,168.65c-39.73-41.65-106-164-277.14-168.6c-73.21-1.97-177.2,46.44-256.86,107.6c-99,76-107.79,203.12-111,267c-11.23,223.8,67.91,251.72,210,279c57.54,11.05,132,28,249-7c53.22-15.92,188.4-49.62,240-130C743.48,449.01,750.61,278.27,646.05,168.65z;"></animate>
									</path>
								</clipPath>
									<image clip-path="url(#clip)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/ph_02.jpg" width="100%" height="100%"></image>
							</svg>
							<p class="ttl">彫金・ジュエリー作家<br>中安麗</p>
						</div>
					</a>
				</li>
				<li>
					<a href="/school/">
						<div class="text">
							<h2 class="subHead">Art School</h2>
							<p>ウララ・アートスクールは個性を大事にした少人数の彫金教室です。彫金や七宝、ボタンなど、各々がつくりたいものを自由につくれます。</p>

							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 730 730">
								<defs>
							        <linearGradient id="frame-gradient02" x1="50%" y1="0%" x2="50%" y2="100%">
							            <?php $g_color = ['#ff6e6e', '#6eebff', '#cd6eff']; ?>
							            <stop offset="0%" stop-color="<?php echo $g_color[0]; ?>">
							                <animate attributeName="stop-color" values="<?php echo $g_color[0]; ?>; <?php echo $g_color[1]; ?>; <?php echo $g_color[2]; ?>; <?php echo $g_color[0]; ?>" dur="10s" repeatCount="indefinite"></animate>
							            </stop>
							            <stop offset="1000%" stop-color="<?php echo $g_color[1]; ?>">
							                <animate attributeName="stop-color" values="<?php echo $g_color[1]; ?>; <?php echo $g_color[2]; ?>; <?php echo $g_color[0]; ?>; <?php echo $g_color[1]; ?>" dur="10s" repeatCount="indefinite"></animate>
							            </stop>
							        </linearGradient>
							    </defs>
							    <path fill="url('#frame-gradient02')">
									<animate dur="60s" repeatCount="indefinite" attributeName="d" attributeType="XML" values="M515.7,500.6c32.7-16.2,58.9-38.4,83.7-60.6c32.8-29.3,30.2-11,60.1-41.8c8.4-8.7,25.4,6.9,35.3-50.9c1.7-10.1,22.5-64.1,15.5-101.6c-7.9-41.9-9.8-36.3-11.7-78.5c1.6-44.1-22.7-86.8-69-112.6c-54.2-30.2-128.8-36.7-200.1-42.3c-37.1-2.9-74.2-5.8-111.4-8.7c-59.5-4.7-123.6-8.7-180,12.6c-50.3,19-85.6,55.8-104.1,93.6S11.6,187,7.8,225.7c-1.3,13.7-2.7,27.5-4,41.2C0.4,301.6-3,336.5,4.5,369.9c9.4,41.9,36.7,80.8,80.9,106.8s105.9,38.3,166.9,29.7c23.2-3.3,46.7-9.5,69.5-8.2c31.1,1.8,55.3,17.2,85.1,22.2C442.5,526.4,483,516.8,515.7,500.6z,M720.4,428.8c27.5-27.2,45.3-53.9,63-84c23.4-39.6,26.6-30.9,11-89c-3.3-12.2-9.3-44.2-10.6-54.4c-1.3-10.2-9.4-17.2-16-24.7c-28.2-32-49.8-64.5-65.3-103.9c-12.6-42.5-89.5-62.2-144-70c-63.8-9.1-102.9,5.6-176,26c-38.1,10.6-116.9-6.6-155,4c-61,17-122.4,37.4-172,78c-44.2,36.2-47.6,123.5-54,166c-6.4,42.5,10.4,75.9,19,114c3.1,13.5,20.9,59.5,24,73c7.7,34.1,20.6,65.5,50,83c67,40,87.4,42.2,140,51s60.8,32.2,119,2c22.2-11.5,118.7-29,142-36c31.7-9.5,90.5-44,122-50C654.9,506.6,692.9,455.9,720.4,428.8z,M515.3,451.5c23.1-24.6,38.6-52.9,52.8-80.8c18.8-36.8,30.6-23.3,46.4-60.5c4.5-10.5,14.4-72.3,12.7-82.1c-1.7-9.9-24.4-66.3-30.7-73.9c-26.8-32.2-17.4-27-33.3-65.6c-13.5-41.4-49-73.9-98.1-84.3C407.6-7.8,340.2,8,276,23.7c-33.4,8.2-66.8,16.4-100.3,24.6c-53.6,13.1-54.1,7.5-96.2,43.8c-37.6,32.4-58.5,60.5-62,101s-24.7,68.9-15,106c3.4,13.1,12.6,95.9,16,109c8.7,33.1,31.3,64.2,49,93c22.3,36.1,63.6,27.8,111,39c47.4,11.2,46.6-1.1,97-27c19.2-9.9,49.1-1.5,69.5-7c27.8-7.5,54.1-0.2,81.9-4.4C460,496.9,492.2,476.1,515.3,451.5z,M561.4,448.3c24.1-25,40.5-53.5,55.6-81.6c19.9-37.1,38.4-74.4,55.3-111.9c4.8-10.6,9.5-21.7,7.9-31.5c-1.6-9.8-9.2-16.8-15.5-24.2c-26.8-31.6-31.6-75.4-47.1-113.6c-12.9-41-48.7-72.7-98.6-82C460.4-7.5,391.2,9.7,325.2,26.6c-34.3,8.8-68.7,17.7-103,26.5c-55,14.2-114,30.3-157.8,67.4C25.3,153.6,5.5,198.3,1.1,238.7s4.9,77.8,14,114.6c3.3,13,6.5,26.1,9.8,39.1c8.2,32.8,16.5,66,34.1,94.3c22.1,35.6,59.3,62.8,107.5,73.1c48.3,10.2,107.7,2.4,159.8-24.5c19.8-10.2,38.9-23.2,59.8-29.1c28.6-8,55.3-1.3,83.8-6C503.9,494.7,537.2,473.3,561.4,448.3z;"></animate>
								</path>
							</svg>
						</div>
						<div class="img">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 730 730">
								<clipPath id="clip">
									<path>
										<animate dur="30s" repeatCount="indefinite" attributeName="d" attributeType="XML" values="M646.05,168.65c-39.73-41.65-106-164-277.14-168.6c-73.21-1.97-177.2,46.44-256.86,107.6c-99,76-107.79,203.12-111,267c-11.23,223.8,67.91,251.72,210,279c57.54,11.05,132,28,249-7c53.22-15.92,188.4-49.62,240-130C743.48,449.01,750.61,278.27,646.05,168.65z;M645.63,168.64c-39.73-41.65-106-164-277.14-168.6c-73.21-1.97-136.2,70.44-215.86,131.6c-99,76-148.79,179.12-152,243c-11.23,223.8,128.37,315.59,272,333c132,16,85-65,202-100c53.22-15.92,173.4-10.62,225-91C743.06,449,750.19,278.25,645.63,168.64z;M519.03,151.64c-39.73-41.65-37-147-208.14-151.6c-73.21-1.97-136.2,70.44-215.86,131.6c-99,76-90.79,246.12-94,310c-11.23,223.8,70.37,248.59,214,266c132,16,161-53,278-88c53.22-15.92,197.13-90.62,192-186C675.03,247.64,623.58,261.25,519.03,151.64z;M604.01,113.64c-39.73-41.65-111-109-282.14-113.6c-73.21-1.97-124.86,57.6-215.86,131.6c-96.83,78.74-138,214-78,326c105.82,197.52,120.37,218.59,264,236c132,16,175-33,292-68c53.22-15.92,117.13-96.62,112-192C686.01,247.64,708.57,223.26,604.01,113.64z;M646.05,168.65c-39.73-41.65-106-164-277.14-168.6c-73.21-1.97-177.2,46.44-256.86,107.6c-99,76-107.79,203.12-111,267c-11.23,223.8,67.91,251.72,210,279c57.54,11.05,132,28,249-7c53.22-15.92,188.4-49.62,240-130C743.48,449.01,750.61,278.27,646.05,168.65z;"></animate>
									</path>
								</clipPath>
									<image clip-path="url(#clip)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/ph_04.jpg" width="100%" height="100%"></image>
							</svg>
							<p class="ttl">彫金＆七宝<br>アートスクール</p>
						</div>
					</a>
				</li>
				<li>
					<a href="/gallery/">
						<div class="text">
							<h2 class="subHead">Gallery Store</h2>
							<p>彫金＆七宝などのジュエリーの展示や、作品展に出展した作品も展示販売しております。また、オーダーメイドでのアクセサリー制作も承っております。お気軽にご相談ください。</p>

							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 730 730">
								<defs>
							        <linearGradient id="frame-gradient03" x1="50%" y1="0%" x2="50%" y2="100%">
							            <?php $g_color = ['#1886a1', '#f9f98c', '#ff6e6e']; ?>
							            <stop offset="0%" stop-color="<?php echo $g_color[0]; ?>">
							                <animate attributeName="stop-color" values="<?php echo $g_color[0]; ?>; <?php echo $g_color[1]; ?>; <?php echo $g_color[2]; ?>; <?php echo $g_color[0]; ?>" dur="10s" repeatCount="indefinite"></animate>
							            </stop>
							            <stop offset="1000%" stop-color="<?php echo $g_color[1]; ?>">
							                <animate attributeName="stop-color" values="<?php echo $g_color[1]; ?>; <?php echo $g_color[2]; ?>; <?php echo $g_color[0]; ?>; <?php echo $g_color[1]; ?>" dur="10s" repeatCount="indefinite"></animate>
							            </stop>
							        </linearGradient>
							    </defs>
							    <path fill="url('#frame-gradient03')">
									<animate dur="50s" repeatCount="indefinite" attributeName="d" attributeType="XML" values="M646.05,168.65c-39.73-41.65-106-164-277.14-168.6c-73.21-1.97-177.2,46.44-256.86,107.6c-99,76-107.79,203.12-111,267c-11.23,223.8,67.91,251.72,210,279c57.54,11.05,132,28,249-7c53.22-15.92,188.4-49.62,240-130C743.48,449.01,750.61,278.27,646.05,168.65z;M645.63,168.64c-39.73-41.65-106-164-277.14-168.6c-73.21-1.97-136.2,70.44-215.86,131.6c-99,76-148.79,179.12-152,243c-11.23,223.8,128.37,315.59,272,333c132,16,85-65,202-100c53.22-15.92,173.4-10.62,225-91C743.06,449,750.19,278.25,645.63,168.64z;M519.03,151.64c-39.73-41.65-37-147-208.14-151.6c-73.21-1.97-136.2,70.44-215.86,131.6c-99,76-90.79,246.12-94,310c-11.23,223.8,70.37,248.59,214,266c132,16,161-53,278-88c53.22-15.92,197.13-90.62,192-186C675.03,247.64,623.58,261.25,519.03,151.64z;M604.01,113.64c-39.73-41.65-111-109-282.14-113.6c-73.21-1.97-124.86,57.6-215.86,131.6c-96.83,78.74-138,214-78,326c105.82,197.52,120.37,218.59,264,236c132,16,175-33,292-68c53.22-15.92,117.13-96.62,112-192C686.01,247.64,708.57,223.26,604.01,113.64z;M646.05,168.65c-39.73-41.65-106-164-277.14-168.6c-73.21-1.97-177.2,46.44-256.86,107.6c-99,76-107.79,203.12-111,267c-11.23,223.8,67.91,251.72,210,279c57.54,11.05,132,28,249-7c53.22-15.92,188.4-49.62,240-130C743.48,449.01,750.61,278.27,646.05,168.65z;"></animate>
								</path>
							</svg>
						</div>
						<div class="img">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 730 730">
								<clipPath id="clip">
									<path>
										<animate dur="24s" repeatCount="indefinite" attributeName="d" attributeType="XML" values="M646.05,168.65c-39.73-41.65-106-164-277.14-168.6c-73.21-1.97-177.2,46.44-256.86,107.6c-99,76-107.79,203.12-111,267c-11.23,223.8,67.91,251.72,210,279c57.54,11.05,132,28,249-7c53.22-15.92,188.4-49.62,240-130C743.48,449.01,750.61,278.27,646.05,168.65z;M645.63,168.64c-39.73-41.65-106-164-277.14-168.6c-73.21-1.97-136.2,70.44-215.86,131.6c-99,76-148.79,179.12-152,243c-11.23,223.8,128.37,315.59,272,333c132,16,85-65,202-100c53.22-15.92,173.4-10.62,225-91C743.06,449,750.19,278.25,645.63,168.64z;M519.03,151.64c-39.73-41.65-37-147-208.14-151.6c-73.21-1.97-136.2,70.44-215.86,131.6c-99,76-90.79,246.12-94,310c-11.23,223.8,70.37,248.59,214,266c132,16,161-53,278-88c53.22-15.92,197.13-90.62,192-186C675.03,247.64,623.58,261.25,519.03,151.64z;M604.01,113.64c-39.73-41.65-111-109-282.14-113.6c-73.21-1.97-124.86,57.6-215.86,131.6c-96.83,78.74-138,214-78,326c105.82,197.52,120.37,218.59,264,236c132,16,175-33,292-68c53.22-15.92,117.13-96.62,112-192C686.01,247.64,708.57,223.26,604.01,113.64z;M646.05,168.65c-39.73-41.65-106-164-277.14-168.6c-73.21-1.97-177.2,46.44-256.86,107.6c-99,76-107.79,203.12-111,267c-11.23,223.8,67.91,251.72,210,279c57.54,11.05,132,28,249-7c53.22-15.92,188.4-49.62,240-130C743.48,449.01,750.61,278.27,646.05,168.65z;"></animate>
									</path>
								</clipPath>
									<image clip-path="url(#clip)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://scontent-nrt1-1.cdninstagram.com/v/t51.2885-15/149050800_1149513792148335_4894836922842519193_n.jpg?_nc_cat=104&ccb=3&_nc_sid=8ae9d6&_nc_ohc=jOrGuf9af18AX_BiGIa&_nc_ht=scontent-nrt1-1.cdninstagram.com&oh=4fdd93de11f50d2d1b32fb9a4cf569f2&oe=604D785D" width="100%" height="100%"></image>
							</svg>
							<p class="ttl">アート<br>ギャラリー</p>
						</div>
					</a>
				</li>
			</ul>

			<section>
				<h2 class="head instagram">instagram</h2>
				<div class="instagram">
			<?php
				$instagram = null;
				$instagram_business_id = '17841444552474741'; // InstagramビジネスアカウントのID
				$access_token = 'EAADuJnbDI2ABAI9XiIVYXGFcuMwq4ZCiBXHOsbrHk5zgEz369XilTGzcf6ZBZAMuc4CoV75ZAglEJ07uvSC8aF2yGjMRh1W5YI7H6u5OQKQwZBUPYKMp1zxiZC4kAHyaJyF2c01Th55ZBbUsW07Qu0cDoVv3xDFtzwkugFsUVZCdPErDs8XYGtVmZCYlZBXyKZCkQgZD'; // 有効期限無期限のアクセストークン
				$post_count = 9;
				$query = 'name,media.limit(' . $post_count. '){caption,like_count,media_url,permalink,timestamp,username,comments_count}';
				$get_url = 'https://graph.facebook.com/v9.0/' . $instagram_business_id . '?fields=' . $query . '&access_token=' . $access_token;
				$curl = curl_init();
				curl_setopt($curl, CURLOPT_URL, $get_url);
				curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
				$response = curl_exec($curl);
				curl_close($curl);
				if($response){
					$instagram = json_decode($response);
					if(isset($instagram->error)){
						$instagram = null;
					}
				}
			?>
			<ul class="galleryList">
				<?php
				foreach((array)$instagram->media->data as $post):
					$caption = $post->caption;
					$caption = preg_replace('/\n/', '<br>', $caption);
				?>
					<li>
						<a href="<?php echo $post->permalink; ?>" target="_blank">
							<figure>
								<img src="<?php if($post->media_type=='VIDEO'){ echo $post->thumbnail_url; } else { echo $post->media_url; } ?>" alt="<?php echo $caption; ?>">
							</figure>
						</a>
					</li>
				<?php endforeach; ?>
			</section>



		</main><!-- // #maincontents -->


	</div><!-- // #wrapper -->


</body>
</html>
