<!doctype html>
<html lang="en">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"></head>
<body style="margin:0;background:#f5f5f0;color:#222;font:15px/1.6 Arial,sans-serif;padding:24px 12px">
  <div style="max-width:650px;margin:auto;background:#fff;border-radius:14px;overflow:hidden;border:1px solid #e8e8df">
    <div style="background:#394521;color:white;padding:22px 28px">
      <h1 style="margin:0;font-size:24px">THE FARM PROJECT</h1>
      <p style="margin:5px 0 0;color:#eee">New retailer / bulk product enquiry</p>
    </div>
    <div style="padding:24px 28px">
      <h2 style="font-size:18px;margin-top:0">Customer &amp; business details</h2>
      <p><b>Name:</b> {{ $enquiry['fullName'] }}</p>
      <p><b>Phone / WhatsApp:</b> {{ $enquiry['phone'] }}</p>
      <p><b>Business:</b> {{ $enquiry['businessName'] }}</p>
      <p><b>Business type:</b> {{ $enquiry['businessType'] }}</p>
      <p><b>Location:</b> {{ $enquiry['city'] }}, {{ $enquiry['state'] }} - {{ $enquiry['pincode'] }}</p>
      <p><b>Business address:</b> {{ $enquiry['shopAddress'] ?? 'Not provided' }}</p>
      <p><b>GSTIN:</b> {{ $enquiry['gstin'] ?? 'Not provided' }}</p>
      <p><b>Email:</b> {{ $enquiry['email'] ?? 'Not provided' }}</p>
      <hr style="border:0;border-top:1px solid #e8e8df;margin:22px 0">
      <h2 style="font-size:18px">Requested products</h2>
      <ul>
        @foreach ($enquiry['products'] as $product)
          <li>
            <b>{{ $product }}</b>
            @if ($product === 'Premium') ({{ $enquiry['grade_premium'] ?? 'No grade' }}) @endif
            @if ($product === 'Supreme') ({{ $enquiry['grade_supreme'] ?? 'No grade' }}) @endif
            @if ($product === 'Standard') ({{ $enquiry['grade_standard'] ?? 'No grade' }}) @endif
          </li>
        @endforeach
      </ul>
      <p><b>Total estimated quantity:</b> {{ $enquiry['monthlyVolume'] ?? 'Not specified' }}</p>
      <p><b>Buying timeline:</b> {{ $enquiry['buyingTimeline'] ?? 'Not specified' }}</p>
      <p><b>Questions / message:</b></p>
      <div style="white-space:pre-wrap;background:#f7f7f2;padding:14px;border-radius:8px">{{ $enquiry['message'] ?? 'None' }}</div>
      <p style="color:#666;font-size:12px;margin-top:22px">Source: The Farm Project /retailer enquiry form. Consent to contact: Yes.</p>
    </div>
  </div>
</body>
</html>
