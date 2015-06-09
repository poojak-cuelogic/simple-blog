<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1><?php echo $post['postTitle'] ?></h1>

	<div id="body">
		<p><em><?php echo $post['authorName'] ?></em></p>
		<p><em><?php echo $post['date'] ?></em></p>
		<p><?php echo $post['postBody'] ?></p>
		<br/>
		<?php if(!empty($post['comments'])) { ?>
		<div style="width:500px; border:1px solid #ddd; padding:20px; margin:10px 0">
			<h3>Comments on this Post</h3>
			<?php 
				foreach($post['comments'] as $comment) {
				?>
					<div>
						<p><?php echo $comment['comment'] ?></p>
						<p><em><?php echo $comment['commentUserName'] ?></em></p>
					</div>
					<hr/>
				<?php		
				}
			?>
		</div>
		<br/>
		<?php } ?>
		<div style="width:500px; border:1px solid #ddd; padding:20px; margin:10px 0">
			<form action="<?php echo base_url() ?>comments/insert" method="POST">
				<h3>Have Something to Say??</h3>
				<label for="guestName">Name</label>
				<p><input type="text" name="guestName"/></p>
				<input type="hidden" name="postId" value="<?php echo $post['postId'] ?>"/>
				<p>Your Comment</p>
				<textarea type="textarea" name="comment"></textarea>
				<p><input type="submit" value="Post Comment"/></p>
			</form>
		</div>
	</div>
</div>

</body>
</html>
