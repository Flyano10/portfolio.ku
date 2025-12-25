<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7ff;
            margin: 0;
            padding: 0;
            color: #1e3a8a;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(15, 23, 42, 0.1);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            color: #ffffff;
            padding: 32px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 26px;
            letter-spacing: 0.5px;
        }
        .content {
            padding: 32px;
        }
        .content h2 {
            margin-top: 0;
            font-size: 20px;
            color: #1e3a8a;
        }
        .info-card {
            background-color: #f1f5ff;
            border: 1px solid #dbeafe;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            color: #1e40af;
        }
        .info-item span {
            font-weight: 600;
            width: 90px;
        }
        .message-box {
            margin-top: 24px;
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 20px;
            color: #1f2937;
            line-height: 1.6;
            white-space: pre-line;
        }
        .footer {
            padding: 24px 32px;
            background-color: #eff6ff;
            text-align: center;
            color: #1d4ed8;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📨 New Contact Message</h1>
            <p style="margin-top: 8px; font-size: 15px; opacity: 0.8;">Someone just reached out from your portfolio website.</p>
        </div>

        <div class="content">
            <h2>Sender Information</h2>
            <div class="info-card">
                <div class="info-item">
                    <span>Name</span>
                    <strong>{{ $contact->nama }}</strong>
                </div>
                <div class="info-item">
                    <span>Email</span>
                    <a href="mailto:{{ $contact->email }}" style="color:#2563eb; text-decoration:none;">{{ $contact->email }}</a>
                </div>
                @if(!empty($contact->subject))
                <div class="info-item">
                    <span>Subject</span>
                    <span>{{ $contact->subject }}</span>
                </div>
                @endif
                <div class="info-item">
                    <span>Date</span>
                    <span>{{ $contact->created_at->timezone('Asia/Jakarta')->format('d M Y, H:i') }} WIB</span>
                </div>
            </div>

            <h2>Message</h2>
            <div class="message-box">
                {{ $contact->pesan }}
            </div>
        </div>

        <div class="footer">
            You received this email because someone submitted the contact form on <strong>raflyjuliano.com</strong>.<br>
            Reply directly to get in touch.
        </div>
    </div>
</body>
</html>
