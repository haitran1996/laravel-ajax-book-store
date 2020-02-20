// $(document).ready(function () {
//     let origin = window.location.origin;
//
//     $('#search-product').keyup(function () {
//         let keyword = $(this).val();
//         $.ajax({
//             url: 'http://127.0.0.1:8000/admin/product/search',
//             type: 'GET',
//             dataType: 'JSON',
//             data: {'keyword': keyword},
//             success: function (result) {
//                 if (result.data) {
//                     let products = result.data;
//
//                     let output = '';
//                     $.each($products, function (index, item) {
//                         output += '<tr>';
//                         output += '<th scope="row">';
//                         output += index + 1;
//                         output += '</th>';
//                         output += '<td>';
//                         output += item.name;
//                         output += '</td>';
//                         output += '<td>';
//                         output += item.image;
//                         output += '</td>';
//                         output += '<td>';
//                         output += item.price;
//                         output += '</td>';
//                         output += '<td>';
//                         output += item.desc;
//                         output += '</td>';
//                         output += '</tr>';
//                     });
//                     if (output == '') {
//                         output += 'No data searched. Try another keyword';
//                     }
//                     $('#list-product').html(output);
//                 }
//             },
//             error: function (errors) {
//
//             }
//         })
//     })
// });
