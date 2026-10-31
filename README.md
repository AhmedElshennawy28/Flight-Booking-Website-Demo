# Shennawy's Airport — Flight Booking Website
A university web-development project for an airport/airline booking experience. The project combines _HTML_, _CSS_, _JavaScript_, _PHP_, and _MySQL/MariaDB_ to present airport information and prototype passenger account and flight-booking workflows.
Project status: Academic prototype / work in progress. The repository contains several implemented UI and server-side flows, but some booking and ticket features are incomplete, with hard-coded demonstration data. It should not be treated as a production-ready booking or payment system.

Features
Website and navigation
- Home, About, Flights, Booking, Tickets, and Contact pages.
- Responsive navigation styling and airport-themed illustrations.
- Flight-listing UI with example routes, times, and prices.
Passenger accounts
- Registration form for passenger details, including name, phone, passport number, and email.
- Password hashing with PHP's password_hash() in the registration flow.
- Login flow that checks stored password hashes with password_verify().
- PHP sessions used to retain the logged-in passenger's email for subsequent actions.
- A password-change page is present, but it does not implement a secure password-reset token/email-verification workflow.
Booking prototype
- A flight-listing page with example flights and Book buttons.
- A booking-related PHP handler attempts to update the signed-in passenger's Flight_code.
- A ticket/boarding-pass-style page and JavaScript that can populate flight details from URL query parameters.(not fully working)
Contact and email
- A contact form with basic input checks.
- PHPMailer is included and used to send an acknowledgement email over SMTP.
Technology stack
- Frontend: HTML5, CSS3, JavaScript
- Backend: PHP
- Database: MySQL / MariaDB (mysqli)
- Email: PHPMailer over SMTP
- UI assets: SVG/PNG illustrations and external Bootstrap, Google Fonts, and Font Awesome resources

