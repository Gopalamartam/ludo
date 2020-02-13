
<style>
  /*    
    Side Navigation Menu V2, RWD
    ===================
    License:
    https://goo.gl/EaUPrt
    ===================
    Author: @PableraShow

 */

  @charset "UTF-8";
  @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

  body {
    font-family: 'Open Sans', sans-serif;
    font-weight: 300;
    line-height: 1.42em;
    color: #A7A1AE;
    background-color: #fff;
  }

  h1 {
    font-size: 3em;
    font-weight: 300;
    line-height: 1em;
    text-align: center;
    color: #4DC3FA;
  }

  h2 {
    font-size: 1em;
    font-weight: 300;
    text-align: center;
    display: block;
    line-height: 1em;
    padding-bottom: 2em;
    color: #FB667A;
  }

  h2 a {
    font-weight: 700;
    text-transform: uppercase;
    color: #FB667A;
    text-decoration: none;
  }

  .blue {
    color: #185875;
  }

  .yellow {
    color: #FFF842;
  }

  .container th h1 {
    font-weight: bold;
    font-size: 1em;
    text-align: left;
    color: #185875;
  }

  .container td {
    font-weight: normal;
    font-size: 1em;
    -webkit-box-shadow: 0 2px 2px -2px #0E1119;
    -moz-box-shadow: 0 2px 2px -2px #0E1119;
    box-shadow: 0 2px 2px -2px #0E1119;
  }

  .container {
    text-align: left;
    overflow: hidden;
    width: 90%;
    margin: 0 auto;
    display: table;
    padding: 0 0 8em 0;
  }

  .container td,
  .container th {
    padding-bottom: 2%;
    padding-top: 2%;
    padding-left: 2%;
  }

  /* Background-color of the odd rows */
  .container tr:nth-child(odd) {
    background-color: #323C50;
  }

  /* Background-color of the even rows */
  .container tr:nth-child(even) {
    background-color: #2C3446;
  }

  .container th {
    background-color: #1F2739;
  }

  .container td:first-child {
    color: #FB667A;
  }

  .container tr:hover {
    background-color: #464A52;
    -webkit-box-shadow: 0 6px 6px -6px #0E1119;
    -moz-box-shadow: 0 6px 6px -6px #0E1119;
    box-shadow: 0 6px 6px -6px #0E1119;
  }

  /* .container td:hover {
    background-color: #FFF842;
    color: #403E10;
    font-weight: bold;

    box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
    transform: translate3d(6px, -6px, 0);

    transition-delay: 0s;
    transition-duration: 0.4s;
    transition-property: all;
    transition-timing-function: line;
  }
 */
  @media (max-width: 800px) {

    .container td:nth-child(4),
    .container th:nth-child(4) {
      display: none;
    }
  }
</style>
<h1>API Doc</h1>


<table class="container">
  <thead>
    <tr>
      <th>
        <h1>Url</h1>
      </th>
      <th>
        <h1>Method</h1>
      </th>
      <th>
        <h1>Parameter</h1>
      </th>
      <th>
        <h1>Response</h1>
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>http://sample.jploft.com/rajtourism/api/register</td>
      <td>Post</td>
      <td>
        <pre>
        name:Ssfsdd
email:Ssfsdd@gmail.com
phone:89465987165
password:123456
refercode:gssdg
image:multipart
      
      </pre>
      </td>
      <td>
        <pre>
        {
    "statusCode": 200,
    "message": "User Registration Completed Successfully",
    "data": {
        "userId": 34,
        "name": "Ssfsdd",
        "phone": "89465987165",
        "email": "Ssfsdd@gmail.com",
        "otp": 5906,
        "image": "",
        "refercode": "SSF34"
    }
}
      </pre>
      </td>
    </tr>
    <tr>
     <td>http://localhost/rajtourism/api/otp-match</td>
      <td>Post</td>
      <td>
        <pre>
      userId:33
      otp:3100
      </pre>
      </td>
      <td>
        <pre>
        {
    "statusCode": 200,
    "message": "Account Verified Succefully",
    "data": {
        "userId": 34,
        "name": "Ssfsdd",
        "phone": "89465987165",
        "email": "Ssfsdd@gmail.com",
        "otp": "5906",
        "image": "",
        "refercode": "SSF34"
    }
}
      </pre>
      </td>
    </tr>
    <tr>
     <td>http://sample.jploft.com/rajtourism/api/login</td>
      <td>Post</td>
      <td>
        <pre>
      email:pavankumard@gmail.com
      password:1234
    
      </pre>
      </td>
      <td>
        <pre>
        {
    "statusCode": 200,
    "message": "Login Successfully",
    "data": {
        "userId": 34,
        "name": "Ssfsdd",
        "email": "Ssfsdd@gmail.com",
        "phone": "89465987165",
        "image": "",
        "refercode": "SSF34"
    }
}
      </pre>
      </td>
    </tr>
    <tr>
     <td>http://sample.jploft.com/rajtourism/api/send-otp</td>
      <td>Post</td>
      <td>
        <pre>
     
        userId:34
     
      </pre>
      </td>
      <td>
        <pre>
        {
    "statusCode": 200,
    "message": "Verification Otp Send On Email. Please Check",
    "data": {
        "userId": "34",
        "otp": 6573
    }
}
      </pre>
      </td>
    </tr>
    <tr>
     <td>http://sample.jploft.com/rajtourism/api/forgetpassword</td>
      <td>Post</td>
      <td>
        <pre>
     
        email:Ssfsdd@gmail.com
     
      </pre>
      </td>
      <td>
        <pre>
        {"statusCode":200,"message":"Verification Otp Send On Email. Please Check","data":{"userId":34,"otp":6152}}
      </pre>
      </td>
    </tr>
    <tr>
     <td>http://sample.jploft.com/rajtourism/api/changepassword</td>
      <td>Post</td>
      <td>
        <pre>
     
        newpassword:123456,
        oldpassword:123456,
        userId:34,
     
      </pre>
      </td>
      <td>
        <pre>
        {"statusCode":200,"message":"Password Updated Successfully","data":{"userId":"34"}}
      </pre>
      </td>
    </tr>

    
    

    <tr>
     <td>http://sample.jploft.com/rajtourism/api/edit-profile</td>
      <td>Post</td>
      <td>
        <pre>
      userId:30
      name:ddddd
     
    
    
      phone:123456789
      email:pavankumard@gmail.com
      image:multipart,
   
      </pre>
      </td>
      <td>
        <pre>
        {"statusCode":200,"message":"Updated Successfully","data":{"userId":30,"name":"ddddd","email":"pavankumard@gmail.com","phone":"123456789","image":""}}
      </pre>
      </td>
    </tr>
    

  

    <tr>
     <td>http://sample.jploft.com/rajtourism/api/homepage</td>
      <td>Post</td>
      <td>
        <pre>
        userId:33
      </pre>
      </td>
      <td>
        <pre>
        {
    "statusCode": 200,
    "message": "Category List",
    "data": {
        "category": [
            {
                "categoryLink": "1"
            }
        ],
        "subcategory": [
            {
                "links": "ss",
                "image": "http://localhost/rajtourism/public/upload/category/1"
            }
        ]
    }
}
      </pre>
      </td>
    </tr>
    <tr>
     <td>http://sample.jploft.com/rajtourism/api/getQuestion</td>
      <td>Post</td>
      <td>
        <pre>
        userId:33,
       
      </pre>
      </td>
      <td>
        <pre>
        {"statusCode":400,"message":"No Question","data":{"question":""}}
      </pre>
      </td>
    </tr>
    <tr>
     <td>http://sample.jploft.com/rajtourism/api/storeQuestion</td>
      <td>Post</td>
      <td>
        <pre>
        userId:33,
        questionId:1
        givenAns:1
      </pre>
      </td>
      <td>
        <pre>
        {"statusCode":200,"message":"Inserted Successfully","data":{"userid":"33,"}}
      </pre>
      </td>
    </tr>
    <tr>
     <td>http://sample.jploft.com/rajtourism/api/prize</td>
      <td>Post</td>
      <td>
        <pre>
        userId:!
      </pre>
      </td>
      <td>
        <pre>
        {
    "statusCode": 200,
    "message": "Winner List",
    "data": [
        {
            "name": "",
            "price": "2",
            "date": "2019-12-17"
        }
    ]
}
      </pre>
      </td>
    </tr>
    <tr>
     <td>http://sample.jploft.com/rajtourism/api/withdrawal</td>
      <td>Post</td>
      <td>
        <pre>
        userId:1
      </pre>
      </td>
      <td>
        <pre>
        {
    "statusCode": 200,
    "message": "Winner List",
    "data": {
        "winner": [
            {
                "name": "",
                "price": "2",
                "date": "2019-12-17"
            }
        ],
        "withdrawalreq": {
            "id": ""
        },
        "totalAmount": 2,
        "minAmount": "30"
    }
}
      </pre>
      </td>
    </tr>
    <tr>
     <td>http://sample.jploft.com/rajtourism/api/withdrawalRequest</td>
      <td>Post</td>
      <td>
        <pre>
        userId:1
        amount:22
      </pre>
      </td>
      <td>
        <pre>
        {
    "statusCode": 200,
    "message": "request Submitted Successfully",
    "data": {
        "id": 2
    }
}
      </pre>
      </td>
    </tr>
    <tr>
     <td>http://sample.jploft.com/rajtourism/api/bloglist</td>
      <td>Post</td>
      <td>
        <pre>
        page:1
     
      </pre>
      </td>
      <td>
        <pre>
        {
    "statusCode": 200,
    "message": "Blog List",
    "data": {
        "blogList": [
            {
                "title": "d",
                "description": "d",
                "shortDescrition": "d",
                "image": "http://localhost/rajtourism/public/upload/post/d",
                "thumbnail": "http://localhost/rajtourism/public/upload/post/d",
                "date": "2019-12-17T15:24:37.000000Z",
                "id": 1
            }
        ],
        "totalRecord": 1
    }
}
      </pre>
      </td>
    </tr>
     <!-- <tr>
     <td>http://sample.jploft.com/rajtourism/api/comment</td>
      <td>Post</td>
      <td>
        <pre>
       user_id:12
        post_id:45
        body:asdasfd
      </pre>
      </td>
      <td>
        <pre>
         {
            "statusCode": 200,
            "message": "success",
            "data": {
                "user_id": "12",
                "post_id": "45",
                "body": "asdasfd",
                "updated_at": "2019-12-03 11:18:23",
                "created_at": "2019-12-03 11:18:23",
                "id": 2
            }
        }
      </pre>
      </td>
    </tr>

    <tr>
     <td>http://sample.jploft.com/rajtourism/api/user-comment-replies</td>
      <td>Post</td>
      <td>
        <pre>
       user_id:12
        comment_id:45
        body:asdasfd
      </pre>
      </td>
      <td>
        <pre>
         {
            "statusCode": 200,
            "message": "success",
            "data": {
                "user_id": "12",
                "comment_id": "45",
                "body": "asdasfd",
                "updated_at": "2019-12-03 11:23:28",
                "created_at": "2019-12-03 11:23:28",
                "id": 3
            }
        }
      </pre>
      </td>
    </tr>


    <tr>
     <td>http://sample.jploft.com/rajtourism/api/user-likes</td>
      <td>Post</td>
      <td>
        <pre>
       user_id:23
      parent_id:24
      like:1
      dislike:
      </pre>
      </td>
      <td>
        <pre>
         {
          "statusCode": 200,
          "message": "like",
          "data": {
              "user_id": "23",
              "pid": "24",
              "likes": "1",
              "updated_at": "2019-12-03 11:25:33",
              "created_at": "2019-12-03 11:25:33",
              "id": 4
          }
      }
      </pre>
      </td>
    </tr> -->

    <tbody>
   

  </tbody>
</table>