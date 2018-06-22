<?php

$bodyContent="

<p>$fullName 様</p>
<p>このたびは、Deerwalk Japan株式会社にお問い合わせいただき誠にありがとうございます。下記のお問い合わせ内容を確認の上、担当者より連絡させていただきます。</p>";
$bodyContent .= "
		<table width='100%' cellpadding='0' cellspacing='0' style='border-collapse:collapsed;'>
			<tr style='background: #a5d6f2 !important;'>
				<td style='border:1px solid #ddd;padding:5px;font-weight:bold;'>お名前</td>
				<td style='border:1px solid #ddd;padding:5px;'>". $fullName ."</td>
			</tr>
			<tr style='background: #eaf4ff !important;'>
				<td style='border:1px solid #ddd;padding:5px;font-weight:bold;'>メールアドレス</td>
				<td style='border:1px solid #ddd;padding:5px;'>". $userEmail ."</td>
			</tr>
			<tr style='background: #a5d6f2 !important;'>
				<td style='border:1px solid #ddd;padding:5px;font-weight:bold;'>件名</td>
				<td style='border:1px solid #ddd;padding:5px;'>". $subject ."</td>
			</tr>
			<tr style='background: #eaf4ff !important;'>
				<td style='border:1px solid #ddd;padding:5px;font-weight:bold;'>お問い合わせ内容</td>
				<td style='border:1px solid #ddd;padding:5px;'>". $message ."</td>
			</tr>
		</table>

		<p>Deewalk Japan株式会社</p>";
?>
