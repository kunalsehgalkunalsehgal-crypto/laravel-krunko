
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KRUNKO Product Enquiry</title>
</head>

<body style="margin:0; padding:25px; background:#f7f7f7; font-family:Arial,sans-serif; color:#222;">

    <div style="max-width:650px; margin:auto; background:#ffffff; padding:25px; border-radius:12px;">

        <h1 style="color:#245c35; margin-top:0;">
            KRUNKO
        </h1>

        <h2>New Product Enquiry</h2>

        <p>
            You have received a new enquiry from the KRUNKO website.
        </p>

        <hr>

        <h3>Customer Details</h3>

        <p><strong>Name:</strong> {{ $customer['name'] }}</p>

        <p><strong>Phone:</strong> {{ $customer['phone'] }}</p>

        <p>
            <strong>Email:</strong>
            {{ $customer['email'] ?? 'Not provided' }}
        </p>

        <p><strong>City:</strong> {{ $customer['city'] }}</p>

        <p>
            <strong>Address:</strong>
            {{ $customer['address'] ?? 'Not provided' }}
        </p>

        <hr>

        <h3>Selected Products</h3>

        <table style="width:100%; border-collapse:collapse;">
            <thead>
                <tr style="background:#245c35; color:#ffffff;">
                    <th style="padding:12px; text-align:left;">
                        Product
                    </th>
                    <th style="padding:12px; text-align:center;">
                        Quantity
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach($items as $item)
                    <tr>
                        <td style="padding:12px; border-bottom:1px solid #ddd;">
                            {{ $item['name'] }}
                        </td>

                        <td style="padding:12px; text-align:center; border-bottom:1px solid #ddd;">
                            {{ $item['quantity'] }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <p>
            <strong>Total Quantity:</strong>
            {{ collect($items)->sum('quantity') }}
        </p>

        <hr>

        <h3>Customer Message</h3>

        <p style="white-space:pre-wrap;">{{ $customer['message'] ?? 'No message provided.' }}</p>

        <hr>

        <p style="font-size:13px; color:#666;">
            This enquiry was sent through the KRUNKO website.
            This is an enquiry only, not a confirmed order.
        </p>

    </div>

</body>
</html>
