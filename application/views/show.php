<!DOCTYPE html>
<html lang="en">
  
<head>
	<title>Show Product</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel="stylesheet" href="">

    <style>
        *{
            margin: 0px;
        }
        div.main_container{
            margin: 0px;
        }
            div.main_container div.header{
            padding: 10px;
            width: 100%;
            height: 40px;
            border: 1px solid black;
            background-color: black;
            color: white;
            }
            div.main_container div.header h1{
            display: inline-block;
            }
            div.main_container div.header p{
            display: inline-block;
            vertical-align: top;
            margin: 8px 0px 0px 850px;
            font-weight: bold;
            }
            div.main_container div.header a{
            display: inline-block;
            vertical-align: top;
            margin: 8px 0px 0px 10px;
            text-decoration: none;
            cursor: pointer;
            color: white;
            }

        div.main_container div.content{
            padding: 20px;
            margin: 0px;
        }
            div.main_container div.content div.image_container{
                border: 1px solid black;
                width: 700px;
                height: 700px;
                margin: 10px 0px 0px 0px;
                display: inline-block;
                vertical-align: top;
                padding: 20px;
            }

                div.main_container div.content div.image_container div.main_image{
                    width: 400px;
                    height: 300px;
                    border: 1px solid black;
                    padding: 20px;
                    margin: 0px 0px 20px 0px ;
                }
                div.main_container div.content div.image_container table td{
                    width: 200px;
                    height: 150px;
                    border: 1px solid black;
                    padding: 10px;
                    margin: 10px 0px 0px 0px;
                }

            div.main_container div.content div.description_container{
                border: 1px solid black;
                width: 300px;
                height: 700px;
                margin: 10px 0px 0px 0px;
                display: inline-block;
                padding: 20px;

            }   
    </style>
</head>
  
<body>

    <div class = "main_container">
        <div class = "header">
            <h1>NAME OF STORE</h1>
            <p> Name </p>
            <a href = ""> Shopping Cart (5) </a>
        </div>

        <div class = "content">
            <a href = "">Go back </a>
            <h1> NAME OF PRODUCT</h1>

            <div >
                <div class = "image_container">
                    <div class = "main_image">
                            <h1>Main image here</h1>
                    </div>
                    <h2>Similar items</h2>
                    <table>
                        <tr>
                            <td>Image here</td>
                            <td>Image here</td>
                            <td>Image here</td>
                            <td>Image here</td>
                        </tr>
                    </table>
                </div>

                <div class = "description_container">
                    <p> Welcome to the website. If you're here, you're likely looking to find random words. Random Word Generator is the perfect tool to help you do this. While this tool isn't a word creator, it is a word generator that will generate random words for a variety of activities or uses. Even better, it allows you to adjust the parameters of the random words to best fit your needs.

                        The first option the tool allows you to adjust is the number of random words to be generated. You can choose as many or as few as you'd like. You also have the option of choosing words that only begin with a certain letter, only end with a certain letter or only begin and end with certain letters. If you leave these blank, the randomized words that appear will be from the complete list.

                        Another option you have is choosing the number of syllables of the words or the word length of the randomized words. There are also ways to further refine these by choosing the "less than" or "greater than" options for both syllables and word length. Again, if you leave the space blank, the complete list of randomized words will be used.

                        You have the option of choosing the types of words you want to be displayed using the "Word Type" dropdown. The default is "All" which is a curated list of thousands of the more common English words. You can also opt to only display nouns, verbs, or adjectives from this curated list. If you want to choose from all the words out there, you can choose "Extended" which is a list that includes over half a million different English words.

                        If you're interested in random words in languages other than English, you can choose the "Non English" word type. Doing so will give you the option to generate words in ten different languages other than English. This includes Spanish words, Hindi words, Arabic words, German words, Russian words, Chinese words, Japanese words, Korean words. Latin words, or Italian words. You simply need to choose the language and then words from that language will randomly appear with each refresh of the page.

                        Once you have input all of your specifications, all you have to do is to press the Generate Random Words button, and a list of random words will appear. Below are some of the common ways people use this tool.
                    </p>

                    <form action=""> 
                        <input type="submit" Value = "Buy">
                        <input type="">
                    </form>
                </div>
            </div>

        </div> 

        <div class = "footer">

        </div>
    
    </div>

</body>
  
</html>