<section class="container mx-auto py-16">
    <?php
    $name = $email = $message = "";
    $succes = false;
    $name_regex = "/^[a-zA-Z\s]{3,}$/";
    function test($data){
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        $data = trim($data);
        return $data;
    }

    if (!empty($_POST)) {
        $name = test($_POST["name"]);
        $email = test($_POST["email"]);
        $message = test($_POST["message"]);
    }
    ?>

    <?php if (preg_match($name_regex, $name) && filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($message) >= 5): ?>
        <div class="max-w-xl mx-auto bg-green-100 text-green-700 p-4 rounded mb-4">
            <?php echo "Merci $name! Votre message a ete envoye avec succes."; ?>
            <?php
            $name = $email = $message = "";
            $succes = true;
            ?>

        </div>
    <?php endif; ?>
    <h2 class="text-3xl font-bold mb-6 text-center">Contactez-nous</h2>

    <form class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-4" method="POST">
        <input type="text" name="name" placeholder="Votre nom" class="w-full border px-4 py-2 rounded-lg" value="<?php echo $name; ?>">
        <span class= 'text-red-500'>*</span>
        <?php if(!empty($_POST) && !preg_match($name_regex, $name) && !$succes)
            if($name == "")
                echo "<span class= 'text-red-500'>please eneter your name</span>";
            else
                echo "<span class= 'text-red-500'>please eneter a valid name</span>";
        ?>

        <input type="email" name="email" placeholder="Votre email" class="w-full border px-4 py-2 rounded-lg" value="<?php echo $email; ?>">
        <span class= 'text-red-500'>*</span>
        <?php if(!empty($_POST) && !filter_var($email, FILTER_VALIDATE_EMAIL) && !$succes)
            if($email == "")
                echo "<span class= 'text-red-500'>please eneter your email</span>";
            else
                echo "<span class= 'text-red-500'>please eneter a valid email</span>";
        ?>

        <textarea placeholder="Votre message" name="message" class="w-full border px-4 py-2 rounded-lg"><?php echo $message; ?></textarea>
        <span class= 'text-red-500'>*</span>
        <?php if(!empty($_POST) && strlen($message) < 5 && !$succes)
            if($message == "")
                echo "<span class= 'text-red-500'>please eneter a message</span>";
            else
                echo "<span class= 'text-red-500'>message must have at least 5 characters</span>";
        ?>
        <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Envoyer</button>
    </form>
</section>
