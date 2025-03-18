<p>Dear {{ $booking->name }},</p>

<p>Thank you for booking with us!</p>
<p>Here is your email: {{ $booking->email }},and</p> <p>Your tracking number: <strong>{{ $trackingNumber }}</strong> for your van tracking and paying process</p>

<p>Pickup Address: {{ $booking->pickup_address }}</p>
<p>Delivery Address: {{ $booking->delivery_address }}</p>

<p>You can click on this link <a href="https://mofat.co.uk/track">https://mofat.co.uk/track</a> to track your service progress.</p>

<p>Best regards,<br>Mofat Moving Service Team</p>
