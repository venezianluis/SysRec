<?php

use App\Http\Controllers\OrderController;
use App\Neo4j\Neo4j;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');

Route::get("/produtos", "HomeController@produto")->name("produto");

Route::get("/produtos/{id}", "ProductController@filterCat")->name("produtoCategoria");

Route::get("/produtoDetalhe/{id}", "HomeController@produtoDetalhe")->name("produtoDetalhe");

Route::get("/sobre", "HomeController@about")->name("about");

Route::get("/contato","HomeController@contact")->name("contact");

Route::get("/carrinho/{id}", "HomeController@cart")->name("cartId");

Route::get("/carrinho","CartController@index")->name("cart");

Route::get("/carrinhoExcluir/{id}","CartController@excluir")->name("cartExcluir");

Route::get("/cliente","HomeController@client")->name("client");

Route::get("/finalizar", "OrderController@finalizar")->name("finalizar");

Route::get("/registrar","HomeController@register")->name("register");

Route::post("/registrarCliente","ClientController@register")->name("clientRegister");

// Rota Fornecedor
Route::get("/registrarFornecedor","SupplierController@index")->name("supplier");

Route::post("/registrarFornecedorSubmit","SupplierController@register")->name("supplierRegister");

// Rota Categoria
Route::get("/registrarCategoria","CategoryController@index")->name("category");

Route::post("/registrarCategoriaSubmit","CategoryController@register")->name("categoryRegister");

// Rota Produtos
Route::get("/registrarProdutos","ProductController@product")->name("product");

Route::post("/registrarProductSubmit","ProductController@register")->name("productRegister");


// Rota Cliente
Route::any("/principal","clientController@autenticar")->name("clienteLogin");

Route::get("/sairCliente","clientController@logout")->name("logoutCliente");

Route::get("/panelCliente","clientController@panelCliente")->name("clientPanel");

Route::get("/consultaVenda","clientController@consultSale")->name("consultSale");

// Rota administrativa
Route::get("/admin","AdminController@index")->name("admin");

Route::any("/painelAdmin","AdminController@autenticar")->name("adminPanel");

Route::get("/sairAdmin","AdminController@logout")->name("logout");




 Route::get('/graph', function () {

//     $prop = ([
//         'infos' => ['name' => 'Geladeira', 'Price' => 4000.00]
//      ]);
     
    // $prop2 = ([
    //     'infos' => ['first_name' => $request->get("first_name"),
    //                  'last_name' => $request->get("last_name"),
    //                  'cpf' => $request->get("cpf"),
    //                  'rg' => $request->get("rg"),
    //                  'sex' => $request->get("sex"),
    //                  'telephone' => $request->get("telephone"),
    //                  'phone_number' => $request->get("phone_numbere"),
    //                  'birth_date' => $request->get("birth_date"),
    //                  'state' => $request->get("state"),
    //                  'city' => $request->get("city"),
    //                  'postal_code' => $request->get("postal_code"),
    //                  'street' => $request->get("street"),
    //                  'street_number' => $request->get("street_number"),
    //                  'complement' => $request->get("complement"),
    //                  'email' => $request->get("email"),
    //                  ]
    //  ]);



//      //name, cpf, rg, sex, telephone, phone_number,date_birth, address (o endereço deve conter: state, city, postal_code, street , street_number, complement), email.
//      $where = ([
//         'Node' => 'Cliente',
//         'Id' => 'teste',
//         'NodeTwo' => 'Produto',
//         'IdTwo' => 'Iphone 7',
//         'Rel' => 'COMPROU'

//      ]);

//      $recom = ([
//         'Node' => 'Cliente',
//         'Id' => 'Elias',
//      ]);

//      $node = ([
//         'Node' => 'Cliente',
//         'Id' => 'teste',
//      ]);

//      $rel = ([
//       'idOne' => '160',
//       'idTwo' => '162',
//        ]);

//     //$r = Neo4j::createNodeProperty("Produto",$prop);
//       $s = Neo4j::createNodeProductProperty("Product",$prop,$rel);
//     //$c = Neo4j::createRelationship($where);
//     //$c = Neo4j::collaborativeFiltration($recom);
//     //$c = Neo4j::deleteNode($node,True);
//       // $neo4j = Neo4j::conectar();
//       // $query = 'MATCH (m:Cliente) RETURN m,m.name as name';
      // $c = $neo4j->run($query);
    //   $data = Neo4j::matchNode("supplier");
    //     foreach ($data as $record)
    //     {
    //         $id[] = $record->value('id'). PHP_EOL;
    //         $name[] = $record->value('name') . PHP_EOL;
    //   echo"<br>";
    //     }

    //     print_r($name);
    //     echo"<br>";

    //     $arr = array(
    //         'id' => $id,
    //         'name' => $name
    //     );

        
     
      return null;
});


