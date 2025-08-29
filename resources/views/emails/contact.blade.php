<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; background: #f8f9fa; padding: 20px; }
        .card { background: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.1); }
        .header { font-size: 20px; font-weight: bold; margin-bottom: 15px; }
        .footer { margin-top: 20px; font-size: 12px; color: #888; }
    </style>
</head>
<body>
    <div class="card">
        <div class="header">📩 New Contact Message</div>

        <p>Hello Admin, you have received a new inquiry from your website.</p>

        <p><b>👤 Name:</b> {{ $contact['name'] }}<br>
        <b>📧 Email:</b> {{ $contact['email'] }}<br>
        <b>📱 Phone:</b> {{ $contact['phone'] ?? 'Not Provided' }}</p>

        <p><b>📝 Message:</b><br>{{ $contact['message'] }}</p>

        <div class="footer">
            Thanks,<br>
            Krazio Cloud
        </div>
    </div>
</body>
</html>
