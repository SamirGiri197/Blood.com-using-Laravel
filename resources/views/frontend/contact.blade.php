<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Contact Us</title>
  <style>
    form {
      display: flex;
      flex-direction: column;
      width: 50%;
      margin: 0 auto;
      padding: 20px;
      background-color: #f5f5f5;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    div {
      display: flex;
      flex-direction: column;
      margin-bottom: 10px;
    }

    label {
      font-weight: bold;
      margin-bottom: 5px;
    }

    input, textarea {
      padding: 5px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }

    button[type="submit"] {
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button[type="submit"]:hover {
      background-color: #3e8e41;
    }
  </style>
</head>
<body>
  <form id="contact-form">
    <div>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
    </div>
    <div>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div>
      <label for="message">Message:</label>
      <textarea id="message" name="message" required></textarea>
    </div>
    <button type="submit">Submit</button>
  </form>

  <script>
    const form = document.getElementById('contact-form');

    form.addEventListener('submit', (e) => {
      e.preventDefault(); // prevent form from submitting
      
      const name = form.querySelector('#name').value;
      const email = form.querySelector('#email').value;
      const message = form.querySelector('#message').value;

      // send form data to backend or API endpoint
      // e.g. using fetch or XMLHttpRequest

      alert(`Thank you for your message, ${name}!`);

      form.reset(); // clear form inputs
    });
  </script>
</body>
</html>
