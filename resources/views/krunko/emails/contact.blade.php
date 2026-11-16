<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><title>New KRUNKO Contact Message</title></head>
<body style="margin:0;padding:30px;background:#f7f7f1;font-family:Arial,sans-serif;color:#25271e;">
<table role="presentation" cellspacing="0" cellpadding="0" style="width:100%;max-width:650px;margin:auto;background:#fff;border:1px solid #e9e7d8;border-radius:12px;">
    <tr><td style="background:#ffdf00;padding:28px 32px;"><strong style="font-size:28px;">KRUNKO</strong><div style="font-size:13px;margin-top:5px;">New Contact Us Message</div></td></tr>
    <tr><td style="padding:30px 32px;">
        <h2 style="margin:0 0 20px;color:#365b28;font-size:23px;">{{ $contact['topic'] }}</h2>
        <p><strong>Name:</strong> {{ $contact['name'] }}</p>
        <p><strong>Email:</strong> {{ $contact['email'] }}</p>
        <p><strong>Phone:</strong> {{ $contact['phone'] ?: 'Not provided' }}</p>
        <h3 style="border-top:1px solid #ddd;padding-top:20px;margin-top:25px;">Message</h3>
        <p style="white-space:pre-wrap;line-height:1.7;">{{ $contact['message'] }}</p>
        <p style="font-size:12px;color:#76766d;border-top:1px solid #eee;padding-top:20px;">Sent from the KRUNKO Contact Us page. This is a message, not an order.</p>
    </td></tr>
</table>
</body>
</html>
