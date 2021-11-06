<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Resume For job opening </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
	@media (max-width: 500px) {
		div {
			font-size: 8px !important;
		}
		img{
			max-width:50px !important;
			max-height:50px !important;
		}
		.whiteboxContainer {
			margin: 10px 20px 5px 20px !important;
		}
	}
	</style>
</head>
<body style="font-family: Verdana, Geneva, sans-serif;box-shadow: 4px 4px 6px #c0c0c0, 0 -1px 6px #c0c0c0;border-radius:10px;margin:10px 10%; border: 1px solid rgb(239, 239, 254); background-color: rgb(237, 237, 237);">
<div>
   <div style="border-top-left-radius:10px;border-top-right-radius:10px;font-size: 26px;font-weight: 700;letter-spacing: -0.02em;line-height: 32px;color: #41637e
;font-family: sans-serif;background-color:#E77E22;padding:5px;" align="center" id="emb-email-header"><img style="padding:6px;border:3px solid #dcdcdc;box-shadow:2px 3px 14px #888;border: 0;-ms-interpolation-mode
: bicubic;display: block;max-width: 90px;" ></div>

	
	<div style="border-radius:10px;background-color: #fff;margin: 20px 40px 5px 40px;padding: 15px 35px;" class="whiteboxContainer" >
		<p>Subject: {{ucfirst($data['name'])}} - [Job Position <strong>({{$data['position']}})</strong> ]</p>

Hello,
<p>
I wish to apply for the position of <strong>{{$data['position']}}</strong>  that is listed on your website. The role and the responsibilities listed in the job description match my interests and skills. I believe that I’m a good candidate for this position. </p>
<p>
I have attached my resume and cover letter for your perusal. I hope they can help you learn more about my background, my qualifications, and my experience. </p>

<p>
Thank you for your valuable time. I’m optimistic that you’ll consider me for this role. I look forward to hearing from you about this job opportunity. </p>

Sincerely,

	<p>Name :  {{ucfirst($data['name'])}} </p>
	<p>Email :  {{$data['email']}} </p>
	<p>Subject :  {{$data['subject']}} </p>
	<p>Mobile :  {{$data['mobile']}} </p>

	Thanks<br>
		
	</div>
	
	<div style="font-size:12px;margin-bottom:10px;padding:10px;font-style:italic;text-align:center;">Need more help getting started? Contact Us. We’re here to help you.</div>
	
</div>
</body>
</html>
