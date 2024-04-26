<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-gray-200">
    <div class="max-w-screen-md mx-auto px-4 py-8 bg-white rounded-lg shadow-md">
        <h1 class="text-3xl text-center text-gray-900 mb-4">Bem-vindo à Página Contato</h1>
        <p class="text-gray-700 mb-4">Gostaria de nos contatar? Entre nos links para se comunicar conosco:</p>
        <ul class="mb-4">
            <li><a href="https://www.instagram.com/eteczonalesteoficial/" class="text-blue-500">Instagram</a></li>
            <li><a href="https://web.whatsapp.com" class="text-blue-500">Whatsapp</a></li>
        </ul>
        <ul class="mb-4">
            <li><a href="/" class="text-blue-500">Início</a></li>
            <li><a href="/quemsomos" class="text-blue-500">Quem Somos</a></li>
        </ul>
        <h1 class="text-3xl text-center text-gray-900 mb-4">Mande mensagem pra Etec</h1>
        <form id="form" class="flex flex-col gap-2 w-500 mx-auto">

            <label class="font-bold mb-1" for="name">Nome:</label>
            <input class="w-full px-4 py-2 border border-gray-300 rounded-lg text-lg" type="text" id="name" required>

            <label class="font-bold mb-1" for="email">E-mail:</label>
            <input class="w-full px-4 py-2 border border-gray-300 rounded-lg text-lg" type="email" id="email" required>

            <label class="font-bold mb-1" for="tel">Telefone:</label>
            <input class="w-full px-4 py-2 border border-gray-300 rounded-lg text-lg" type="tel" id="tel" required>

            <label class="font-bold mb-1" for="message">Mensagem:</label>
            <textarea class="w-full px-4 py-2 border border-gray-300 rounded-lg text-lg" name="message" id="message" required></textarea>

            <button class="px-4 py-2 rounded-lg bg-gray-800 text-white text-lg cursor-pointer mb-4 mt-2" type="submit">Enviar</button>
        </form>
        <img class="mx-auto" src="https://assets-cdn.static-gm.com/Assets/4f0f6052-48d3-443b-9406-926a50c4f665/8847690b-6efe-4ae2-89b9-3afef0aacedb/v-1580408825/Mobile.jpg" alt="">
    </div>
    <script>
     const form = document.querySelector("#form");
     const nameInput = document.querySelector("#name");
     const emailInput = document.querySelector("#email")
     const telInput = document.querySelector("#tel");
     const messageTextarea = document.querySelector("#message");

     form.addEventListener("submit", (event) => {
        event.preventDefault();

        // Verifica se o nome está vazio
        if(nameInput.value === ""){
            alert("Por favor, preencha o seu nome");
            return;
        }

        // Verifica se o email está vazio ou em um formato inválido
        if(emailInput.value === "" || !isValidEmail(emailInput.value)){
            alert("Por favor, insira um e-mail válido");
            return;
        }

        // Verifica se o telefone está vazio ou em um formato inválido
        if(telInput.value === "" || !isValidPhone(telInput.value)){
            alert("Por favor, insira um número de telefone válido");
            return;
        }

        // Verifica se a mensagem está vazia
        if(messageTextarea.value === ""){
            alert("Por favor, preencha a mensagem");
            return;
        }

        // Exibe o alerta de mensagem enviada
        alert("Mensagem enviada com sucesso!");
     })

     // Função para validar o formato do email
     function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
     }

     // Função para validar o formato do telefone
     function isValidPhone(phone) {
    return /^\d{10,11}$/.test(phone);
}

    </script>
</body>
</html>
