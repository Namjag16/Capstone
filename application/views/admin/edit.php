<!DOCTYPE html>
<html lang="en">
  
<head>
	<title>Edit</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel="stylesheet" href="assets/css/edit.css">
</head>
  
<body>
    <div class = "main_container">
        <div class = "header">
            <h1>Dashboard</h1>
            <h2><a href = "" >Orders </a></h2>
            <h2><a href = "<?= base_url("/show_product") ?>"> Products </a></h2>
            <h3> <a href = ""> Log off </a></h3>
        </div>

        <div class = "content">
            <h1>Edit Product - ID 2</h1>

            <form action = "">
                <input type = "text" name = "product_name" placeholder = "Name">
                <textarea name = "description" placeholder = "Description here" cols="50" rows="10"> </textarea>
                <label for = "category">Category</label>
                <select id="category" name="category">
                    <option value = "shirt">Shirt</option>
                    <option value = "bag"> Bag</option>
                    <option value = "jeans">Jeans</option>
                </select>
                <input type = "text" name = "add_new_category" placeholder = "Add new category ">
                <input type="file" name="image" value = "Download_image" class = "upload_img">
                <input type="submit" name="action" value="Cancel" class = "cancel_btn"/>
                <input type="submit" name="action" value="Preview" class = "preview_btn"/>
                <input type="submit" name="action" value="Update" class = "update_btn"/>

            </form>

        </div>

        <div class = "footer">

        </div>
    
    </div>

</body>
  
</html>