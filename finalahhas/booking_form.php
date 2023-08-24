<!DOCTYPE html>
<html>
<head>
    <title>Form Booking</title>
</head>
<body>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #ee1b2e;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 7px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #ee1b2e;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            width: 100%;
            padding: 9px;
            margin-bottom: 10px;
            border: 1px solid #ee1b2e;
            border-radius: 4px;
        }
        input[type="date"],
        input[type="time"] {
        width: 100%;
        padding: 9px;
        margin-bottom: 10px;
        border: 1px solid #ee1b2e;
        border-radius: 4px;
        font-size: 18px;
        }
        button[type="submit"] {
            background-color: #ee1b2e;
            color: #white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #CC0000;
        }

        .back-button {
        display: inline-block;
        margin-top: 0px;
        background-color: #ee1b2e;
        color: #ffffff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 18px;
        transition: background-color 0.3s ease-in-out;
    }

    .back-button:hover {
        background-color: #CC0000;
    }
    </style>
    <h1>Form Booking</h1>
    <form id="bookingForm">
        <label for="name">Nama:</label>
        <input type="text" id="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" required><br><br>
        
        <label for="phone">Nomor Telepon:</label>
        <input type="tel" id="phone" required><br><br>
        
        <label for="booking_date">Tanggal Booking:</label>
        <input type="date" id="booking_date" required><br><br>
        
        <label for="booking_time">Waktu Booking:</label>
        <input type="time" id="booking_time" required><br><br>
        
        <label for="message">Pesan:</label>
        <textarea id="message" required></textarea><br><br>
        
        <button type="submit">Kirim Pesan</button>
    </form>
    <a href="home.php" class="back-button">Kembali ke Home</a>


    <script>
        const bookingForm = document.getElementById('bookingForm');
        bookingForm.addEventListener('submit', (e) => {
            e.preventDefault();

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const booking_date = document.getElementById('booking_date').value;
            const booking_time = document.getElementById('booking_time').value;
            const message = document.getElementById('message').value;

            const booking_datetime = `Tanggal Booking: ${booking_date}\nWaktu Booking: ${booking_time}`;

            const whatsappMessage = `Halo, saya tertarik untuk melakukan booking.\n\nNama: ${name}\nEmail: ${email}\nNomor Telepon: ${phone}\n${booking_datetime}\nPesan: ${message}`;

            const encodedMessage = encodeURIComponent(whatsappMessage);
            const phoneNumber = '628113311234';
            const whatsappURL = `https://wa.me/${phoneNumber}?text=${encodedMessage}`;

            // Mengarahkan pengguna ke URL WhatsApp
            window.open(whatsappURL, '_blank');
        });
    </script>
</body>
</html>
