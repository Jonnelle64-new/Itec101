<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gourmet Recipes</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, rgb(249, 102, 229), #2a5298);
            color: white;
            text-align: center;
            padding: 20px;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px; /* Add some space below the header */
        }

        .gourmet-title {
            font-size: 2rem; /* Centered title style */
            font-weight: bold;
            flex: 1; /* This allows the title to take available space */
            text-align: center; /* Center align the gourmet title */
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 10px;
        }

        .logout-btn {
            background: #ff4a9c;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            transition: 0.3s;
        }

        .logout-btn:hover {
            background: #ff2179;
        }

        .left-header {
            text-align: left;
            margin-left: 20px; /* Add some padding to the left */
            font-size: 1.5rem; /* Adjust header size as needed */
            line-height: 1.2; /* Line spacing control for vertical stacking */
        }

        .recipe-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .recipe-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s;
            cursor: pointer;
        }

        .recipe-card:hover {
            transform: scale(1.05);
        }

        .recipe-card img {
            width: 100%;
            border-radius: 10px;
            height: 200px; /* Set a fixed height for the images */
            object-fit: cover; /* Ensures the image covers the area without distortion */
        }

        .recipe-card h2 {
            margin: 15px 0;
            font-size: 1.5rem;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .modal-content {
            background: white;
            color: black;
            padding: 20px;
            border-radius: 10px;
            width: 50%;
            text-align: left;
            max-width: 600px; /* Maximum width for larger screens */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }

        .close {
            float: right;
            font-size: 1.5rem;
            cursor: pointer;
            color: #ff4a9c;
        }

        @media (max-width: 600px) {
            .recipe-card {
                width: 90%;
            }

            .modal-content {
                width: 90%;
            }

            .left-header {
                font-size: 1.2rem; /* Responsive header size for mobile */
            }

            .gourmet-title {
                font-size: 1.5rem; /* Responsive title size for mobile */
            }
        }
    </style>
</head>
<body>
<body>
<body>
    <div class="navbar">
        <div class="left">
            <a href="profile.php" class="profile-btn">Profile</a>
        </div>
       
        <div class="right">
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>
    </div>

    <style>
        .profile-btn {
            background: #ff4a9c;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            transition: 0.3s;
        }

        .profile-btn:hover {
            background:rgb(255, 88, 163); /* Darker blue on hover */
        }
    </style>
</body>
    
    <div class="hero">
        <h1>Welcome to Delos Santos 
                    & 
                Delcano Recipes</h1>
        <p>Indulge in the finest dishes, crafted with perfection.</p>
    </div>
    
    <div class="recipe-container">
        <div class="recipe-card" onclick="openModal('adobo')">
            <img src="recipe1.jpg" alt="Chicken Adobo">
            <h2>Chicken Adobo</h2>
            <p>A savory and tangy Filipino dish with soy sauce, vinegar, and garlic.</p>
        </div>
        <div class="recipe-card" onclick="openModal('sinigang')">
            <img src="recipe2.jpg" alt="Chicken Sinigang">
            <h2>Chicken Sinigang</h2>
            <p>A sour and delicious tamarind-based chicken soup, rich in flavor.</p>
        </div>
        <div class="recipe-card" onclick="openModal('wings')">
            <img src="recipe3.jpg" alt="Buffalo Wings">
            <h2>Buffalo Wings</h2>
            <p>Spicy, crispy, and coated in a buttery hot sauce. Perfect for any occasion.</p>
        </div>
    </div>
    

    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2 id="modal-title"></h2>
            <h3>Ingredients:</h3>
            <ul id="modal-ingredients"></ul>
            <h3>Steps:</h3>
            <ol id="modal-steps"></ol>
        </div>
    </div>

    

    <script>
        function openModal(recipe) {
            const recipes = {
                'adobo': {
                    title: 'Chicken Adobo',
                    ingredients: [
                        '1 kg chicken',
                        '1/2 cup soy sauce',
                        '1/2 cup vinegar',
                        '4 cloves garlic',
                        '2 bay leaves',
                        '1 tsp black peppercorns'
                    ],
                    steps: [
                        'Marinate chicken in soy sauce and garlic for 30 minutes.',
                        'Heat oil and brown the chicken.',
                        'Add vinegar, bay leaves, and peppercorns.',
                        'Simmer until chicken is tender.'
                    ]
                },
                'sinigang': {
                    title: 'Chicken Sinigang',
                    ingredients: [
                        '1 kg chicken',
                        '1 pack tamarind mix',
                        '2 tomatoes',
                        '1 onion',
                        '5 cups water',
                        'Vegetables (kangkong, radish, eggplant)'
                    ],
                    steps: [
                        'Boil water and add onion and tomatoes.',
                        'Add chicken and simmer until tender.',
                        'Stir in tamarind mix and vegetables.',
                        'Cook until vegetables are soft.'
                    ]
                },
                'wings': {
                    title: 'Buffalo Wings',
                    ingredients: [
                        '500g chicken wings',
                        '1 cup hot sauce',
                        '1/2 cup butter',
                        '1/2 cup flour',
                        'Salt and pepper'
                    ],
                    steps: [
                        'Coat wings with flour, salt, and pepper.',
                        'Deep fry until crispy.',
                        'Melt butter and mix with hot sauce.',
                        'Toss wings in sauce and serve.'
                    ]
                }
            };

            document.getElementById('modal-title').innerText = recipes[recipe].title;
            document.getElementById('modal-ingredients').innerHTML = recipes[recipe].ingredients.map(ing => `<li>${ing}</li>`).join('');
            document.getElementById('modal-steps').innerHTML = recipes[recipe].steps.map(step => `<li>${step}</li>`).join('');
            document.getElementById('modal').style.display = 'flex';
        }
        
        function closeModal() {
            document.getElementById('modal').style.display = 'none';
        }
    </script>
</body>
</html>