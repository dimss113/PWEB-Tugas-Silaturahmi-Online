<!DOCTYPE html>
<html>

  <head>
    <title>Contact Book</title>
    <style>
      * {
        box-sizing: border-box;
        font-family: Arial, sans-serif;
      }

      body {
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
      }

      .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }

      h1 {
        text-align: center;
        margin-bottom: 20px;
      }

      form input[type="text"],
      form input[type="email"],
      form select,
      form textarea {
        display: block;
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: none;
        border-radius: 5px;
        background-color: #f2f2f2;
        font-size: 16px;
        font-weight: bold;
        color: #666;
        transition: all 0.3s ease;
      }

      form input[type="text"]:focus,
      form input[type="email"]:focus,
      form select:focus,
      form textarea:focus {
        outline: none;
        background-color: #e6e6e6;
      }

      form textarea {
        height: 150px;
        resize: none;
      }

      form button[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
      }

      form button[type="submit"]:hover {
        background-color: #0062cc;
      }
    </style>
  </head>

  <body>
    <div class="container">
      <h1>Contact Book</h1>
      <form action="message.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="nama" id="name" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="subject">Subject</label>
        <select name="subject" id="subject" required>
          <option value="">- Select -</option>
          <option value="Pesan">Pesan</option>
          <option value="Ucapan">Ucapan</option>
          <option value="Info">Info</option>
        </select>

        <label for="message">Message</label>
        <textarea name="message" id="message" required></textarea>

        <button type="submit" name="update_pesan">Send</button>
      </form>
    </div>
  </body>

</html>