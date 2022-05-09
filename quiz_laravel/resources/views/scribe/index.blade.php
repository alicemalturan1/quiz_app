<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>QuizApp Web API</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://quizlaravel.test";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-3.27.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-3.27.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                                                                            <ul id="tocify-header-0" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="introduction">
                        <a href="#introduction">Introduction</a>
                    </li>
                                            
                                                                    </ul>
                                                <ul id="tocify-header-1" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="authenticating-requests">
                        <a href="#authenticating-requests">Authenticating requests</a>
                    </li>
                                            
                                                </ul>
                    
                    <ul id="tocify-header-2" class="tocify-header">
                <li class="tocify-item level-1" data-unique="quiz-endpoints">
                    <a href="#quiz-endpoints">Quiz Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-quiz-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="quiz-endpoints-GETapi-getCategories">
                        <a href="#quiz-endpoints-GETapi-getCategories">Get All Categories</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="quiz-endpoints-GETapi-getCategoryById--id-">
                        <a href="#quiz-endpoints-GETapi-getCategoryById--id-">Get Category By Id</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="quiz-endpoints-GETapi-getQuizzes">
                        <a href="#quiz-endpoints-GETapi-getQuizzes">Get All Quizzes</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="quiz-endpoints-GETapi-getQuizById--id-">
                        <a href="#quiz-endpoints-GETapi-getQuizById--id-">Get Quiz by Id</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="quiz-endpoints-GETapi-getQuestionById--id-">
                        <a href="#quiz-endpoints-GETapi-getQuestionById--id-">Get Question by Id</a>
                    </li>
                                                    </ul>
                            </ul>
        
                        
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: May 9 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://quizlaravel.test</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="quiz-endpoints">Quiz Endpoints</h1>

    <p>Api for quizzes</p>

            <h2 id="quiz-endpoints-GETapi-getCategories">Get All Categories</h2>

<p>
</p>



<span id="example-requests-GETapi-getCategories">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://quizlaravel.test/api/getCategories" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"with_quizzes\": false,
    \"random_categories\": true,
    \"random_quizzes\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://quizlaravel.test/api/getCategories"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "with_quizzes": false,
    "random_categories": true,
    "random_quizzes": true
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-getCategories">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 3,
        &quot;name&quot;: &quot;Matematik&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
        &quot;quizzes&quot;: [
            {
                &quot;id&quot;: 30,
                &quot;category_id&quot;: 3,
                &quot;title&quot;: &quot;Dolorem quia nisi sunt dolores consequatur.&quot;,
                &quot;description&quot;: &quot;Perferendis quidem rerum omnis voluptatem pariatur eaque ab hic quo accusantium quo dolorem officiis et voluptate et non aperiam occaecati eum.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
            },
            {
                &quot;id&quot;: 25,
                &quot;category_id&quot;: 3,
                &quot;title&quot;: &quot;Facilis est et minima.&quot;,
                &quot;description&quot;: &quot;Ratione dolorem voluptatem et corrupti et earum dignissimos commodi saepe enim.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
            },
            {
                &quot;id&quot;: 23,
                &quot;category_id&quot;: 3,
                &quot;title&quot;: &quot;Optio temporibus molestias magni dolorum.&quot;,
                &quot;description&quot;: &quot;Pariatur et modi laboriosam cum consequatur quibusdam voluptatibus sit quaerat ut consequatur explicabo sit voluptatibus dolorem nam.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
            },
            {
                &quot;id&quot;: 29,
                &quot;category_id&quot;: 3,
                &quot;title&quot;: &quot;Reiciendis possimus similique ut.&quot;,
                &quot;description&quot;: &quot;Perspiciatis voluptates ipsam dolorum et similique non aperiam saepe non aut necessitatibus harum id quia tempore sed animi inventore.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
            },
            {
                &quot;id&quot;: 21,
                &quot;category_id&quot;: 3,
                &quot;title&quot;: &quot;Voluptatum nobis dignissimos.&quot;,
                &quot;description&quot;: &quot;Eos pariatur dolores ea voluptates rerum impedit non dolores enim natus.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
            },
            {
                &quot;id&quot;: 22,
                &quot;category_id&quot;: 3,
                &quot;title&quot;: &quot;Quisquam assumenda ducimus laborum.&quot;,
                &quot;description&quot;: &quot;Aspernatur ut corporis corporis non nesciunt et voluptas officia aut dolorum nam id.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
            },
            {
                &quot;id&quot;: 28,
                &quot;category_id&quot;: 3,
                &quot;title&quot;: &quot;Id ut aut consequatur voluptatum.&quot;,
                &quot;description&quot;: &quot;Eum non occaecati et omnis ut error nesciunt ipsum sapiente magnam occaecati omnis voluptatem incidunt enim cupiditate voluptatem.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
            },
            {
                &quot;id&quot;: 26,
                &quot;category_id&quot;: 3,
                &quot;title&quot;: &quot;Ipsa aut voluptatem dolorem quaerat.&quot;,
                &quot;description&quot;: &quot;Amet quia nesciunt aut voluptatibus inventore doloribus itaque dolor dolorum.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
            },
            {
                &quot;id&quot;: 27,
                &quot;category_id&quot;: 3,
                &quot;title&quot;: &quot;Doloribus eius suscipit praesentium.&quot;,
                &quot;description&quot;: &quot;Voluptatem fugiat qui animi omnis aut quaerat aut aut recusandae.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
            },
            {
                &quot;id&quot;: 24,
                &quot;category_id&quot;: 3,
                &quot;title&quot;: &quot;Aliquid harum et fugiat dolor qui.&quot;,
                &quot;description&quot;: &quot;Recusandae optio aut velit qui voluptas tempora velit excepturi beatae similique ea unde rerum.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
            }
        ]
    },
    {
        &quot;id&quot;: 4,
        &quot;name&quot;: &quot;Genel K&uuml;lt&uuml;r&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
        &quot;quizzes&quot;: [
            {
                &quot;id&quot;: 38,
                &quot;category_id&quot;: 4,
                &quot;title&quot;: &quot;Suscipit cum eius esse neque.&quot;,
                &quot;description&quot;: &quot;Pariatur aliquam eius eius praesentium voluptatem excepturi eligendi enim libero consequatur et est praesentium sint reprehenderit deleniti.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 35,
                &quot;category_id&quot;: 4,
                &quot;title&quot;: &quot;Et sed expedita.&quot;,
                &quot;description&quot;: &quot;Aliquam optio et natus et quis eum et adipisci odit in error iusto aut deserunt quae voluptas sit aut illo.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 36,
                &quot;category_id&quot;: 4,
                &quot;title&quot;: &quot;Placeat esse quas nulla fugit et.&quot;,
                &quot;description&quot;: &quot;Nulla et eos hic ut sed ipsam a doloremque harum ipsa.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 31,
                &quot;category_id&quot;: 4,
                &quot;title&quot;: &quot;Repudiandae ut incidunt iste.&quot;,
                &quot;description&quot;: &quot;Sed asperiores alias sit et dolorem aut perspiciatis vel nemo aperiam est ea voluptatem dolorum alias quod consectetur.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 40,
                &quot;category_id&quot;: 4,
                &quot;title&quot;: &quot;Soluta saepe optio ab qui.&quot;,
                &quot;description&quot;: &quot;Dignissimos qui sit veritatis necessitatibus expedita occaecati est corporis consequatur et ut quibusdam ratione aliquid.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 32,
                &quot;category_id&quot;: 4,
                &quot;title&quot;: &quot;Et et voluptate dolor nesciunt mollitia.&quot;,
                &quot;description&quot;: &quot;Itaque deleniti enim hic sit nihil eum voluptatum vel consequatur perspiciatis commodi animi nisi.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 34,
                &quot;category_id&quot;: 4,
                &quot;title&quot;: &quot;Error voluptates mollitia laboriosam.&quot;,
                &quot;description&quot;: &quot;Sunt magni magnam vero ullam id quia debitis tempora distinctio ex voluptas et sit non rem optio numquam.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 37,
                &quot;category_id&quot;: 4,
                &quot;title&quot;: &quot;Iste aliquid in optio.&quot;,
                &quot;description&quot;: &quot;Facere excepturi quasi ipsam quidem eum qui nemo sint omnis quo laudantium qui quaerat tempore et est et voluptas.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 33,
                &quot;category_id&quot;: 4,
                &quot;title&quot;: &quot;Illum ducimus laborum odit.&quot;,
                &quot;description&quot;: &quot;Nemo velit et sed iste eaque optio omnis voluptate est.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 39,
                &quot;category_id&quot;: 4,
                &quot;title&quot;: &quot;Provident quo ducimus pariatur.&quot;,
                &quot;description&quot;: &quot;Reprehenderit unde laudantium est ratione ea eius deleniti qui quia voluptatem facilis quae voluptas ut molestias aut.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;
            }
        ]
    },
    {
        &quot;id&quot;: 5,
        &quot;name&quot;: &quot;Diğer&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
        &quot;quizzes&quot;: [
            {
                &quot;id&quot;: 48,
                &quot;category_id&quot;: 5,
                &quot;title&quot;: &quot;Porro omnis quibusdam eaque eligendi.&quot;,
                &quot;description&quot;: &quot;Suscipit placeat in est hic ducimus quaerat ipsum qui temporibus aliquid fugit eligendi amet sed ex amet.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;
            },
            {
                &quot;id&quot;: 44,
                &quot;category_id&quot;: 5,
                &quot;title&quot;: &quot;Similique voluptas quod.&quot;,
                &quot;description&quot;: &quot;Sequi illum error aut est eos et labore amet eligendi corrupti id voluptas vitae non quas aut quo enim.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;
            },
            {
                &quot;id&quot;: 45,
                &quot;category_id&quot;: 5,
                &quot;title&quot;: &quot;Veniam quod perspiciatis.&quot;,
                &quot;description&quot;: &quot;Ut consequuntur autem et animi maiores sit voluptates aut similique reiciendis nisi quis aliquid non voluptates laborum aliquid molestiae.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;
            },
            {
                &quot;id&quot;: 42,
                &quot;category_id&quot;: 5,
                &quot;title&quot;: &quot;Dolorem ad eum vel corporis.&quot;,
                &quot;description&quot;: &quot;Qui consequatur consequatur quos sed ullam numquam nobis blanditiis et magni enim sunt amet.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;
            },
            {
                &quot;id&quot;: 41,
                &quot;category_id&quot;: 5,
                &quot;title&quot;: &quot;Magni excepturi excepturi sunt consequatur.&quot;,
                &quot;description&quot;: &quot;Optio repudiandae totam cumque sunt odio dolorem sed rem iusto molestiae non sint voluptatum voluptas molestias.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;
            },
            {
                &quot;id&quot;: 50,
                &quot;category_id&quot;: 5,
                &quot;title&quot;: &quot;Corrupti dolore quo.&quot;,
                &quot;description&quot;: &quot;Iste in officia enim ut sit sint eligendi natus provident exercitationem odit.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;
            },
            {
                &quot;id&quot;: 47,
                &quot;category_id&quot;: 5,
                &quot;title&quot;: &quot;Voluptate incidunt modi.&quot;,
                &quot;description&quot;: &quot;Ut et et maxime assumenda corrupti aut et ab sed.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;
            },
            {
                &quot;id&quot;: 43,
                &quot;category_id&quot;: 5,
                &quot;title&quot;: &quot;Minus rerum et aspernatur.&quot;,
                &quot;description&quot;: &quot;Minima aut quia dolor corrupti voluptate iusto earum nemo est culpa.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;
            },
            {
                &quot;id&quot;: 46,
                &quot;category_id&quot;: 5,
                &quot;title&quot;: &quot;Distinctio est doloremque voluptates autem.&quot;,
                &quot;description&quot;: &quot;Quia aut voluptates nam aut consequatur enim dolore autem temporibus ducimus molestiae ut.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;
            },
            {
                &quot;id&quot;: 49,
                &quot;category_id&quot;: 5,
                &quot;title&quot;: &quot;Quam sed aut quibusdam.&quot;,
                &quot;description&quot;: &quot;Aut vel consequatur iure ut et velit voluptas laudantium blanditiis eaque fugiat nesciunt et.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;
            }
        ]
    },
    {
        &quot;id&quot;: 7,
        &quot;name&quot;: &quot;M&uuml;zik&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
        &quot;quizzes&quot;: [
            {
                &quot;id&quot;: 65,
                &quot;category_id&quot;: 7,
                &quot;title&quot;: &quot;Eos voluptas nihil dolore.&quot;,
                &quot;description&quot;: &quot;Et et deserunt dolores cum ipsam reprehenderit autem debitis cumque hic aut dolorem nam impedit quia.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;
            },
            {
                &quot;id&quot;: 70,
                &quot;category_id&quot;: 7,
                &quot;title&quot;: &quot;Explicabo consectetur saepe porro voluptate.&quot;,
                &quot;description&quot;: &quot;Debitis temporibus ut quae odio illo sit sint dicta aspernatur accusantium aut cumque ipsam laudantium.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;
            },
            {
                &quot;id&quot;: 69,
                &quot;category_id&quot;: 7,
                &quot;title&quot;: &quot;Animi natus molestiae asperiores.&quot;,
                &quot;description&quot;: &quot;Doloremque adipisci neque vel exercitationem beatae veritatis non molestiae eaque sed repellendus.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;
            },
            {
                &quot;id&quot;: 63,
                &quot;category_id&quot;: 7,
                &quot;title&quot;: &quot;Recusandae at et molestias itaque.&quot;,
                &quot;description&quot;: &quot;Reiciendis quo fuga et rerum amet et deserunt delectus voluptatum fugiat reprehenderit beatae et hic iste enim.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;
            },
            {
                &quot;id&quot;: 61,
                &quot;category_id&quot;: 7,
                &quot;title&quot;: &quot;Unde sed sequi omnis sunt necessitatibus.&quot;,
                &quot;description&quot;: &quot;Repellendus vel numquam magnam asperiores velit tempora reiciendis et eius alias quis voluptas quae et labore dolorem ullam nemo aut.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;
            },
            {
                &quot;id&quot;: 66,
                &quot;category_id&quot;: 7,
                &quot;title&quot;: &quot;In eligendi mollitia non voluptas odit.&quot;,
                &quot;description&quot;: &quot;Occaecati et omnis omnis sit deleniti vel qui vel enim.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;
            },
            {
                &quot;id&quot;: 68,
                &quot;category_id&quot;: 7,
                &quot;title&quot;: &quot;Nemo pariatur libero.&quot;,
                &quot;description&quot;: &quot;Molestias molestias minus harum ea voluptatem ex quo consequatur et doloribus in id libero.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;
            },
            {
                &quot;id&quot;: 62,
                &quot;category_id&quot;: 7,
                &quot;title&quot;: &quot;Doloribus nulla iste minima qui.&quot;,
                &quot;description&quot;: &quot;Est vel neque ut est non dolores eligendi mollitia et libero et unde dolor distinctio consequatur ut officiis recusandae mollitia.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;
            },
            {
                &quot;id&quot;: 67,
                &quot;category_id&quot;: 7,
                &quot;title&quot;: &quot;Accusantium quis enim eius.&quot;,
                &quot;description&quot;: &quot;Quae ea qui harum ut eaque ipsa exercitationem beatae et sint ipsam quidem corrupti ducimus ex earum dolorem.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;
            },
            {
                &quot;id&quot;: 64,
                &quot;category_id&quot;: 7,
                &quot;title&quot;: &quot;Perferendis qui modi.&quot;,
                &quot;description&quot;: &quot;Consequatur error error id quam officia exercitationem est dignissimos dolore id laudantium non aliquid eos.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;
            }
        ]
    },
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Kimya&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
        &quot;quizzes&quot;: [
            {
                &quot;id&quot;: 4,
                &quot;category_id&quot;: 1,
                &quot;title&quot;: &quot;Et non ipsam ex illum.&quot;,
                &quot;description&quot;: &quot;Vel odit velit omnis quos illo praesentium nisi eaque maiores et non recusandae id itaque unde et.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
            },
            {
                &quot;id&quot;: 6,
                &quot;category_id&quot;: 1,
                &quot;title&quot;: &quot;A aut natus dignissimos.&quot;,
                &quot;description&quot;: &quot;Consequatur fugiat iusto eos non deleniti corrupti dignissimos est assumenda quis culpa optio nisi unde.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
            },
            {
                &quot;id&quot;: 2,
                &quot;category_id&quot;: 1,
                &quot;title&quot;: &quot;Impedit porro omnis.&quot;,
                &quot;description&quot;: &quot;Laborum minima dolor molestiae consequuntur nam est minus non illum fugiat voluptatem vel placeat numquam qui a iusto.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
            },
            {
                &quot;id&quot;: 9,
                &quot;category_id&quot;: 1,
                &quot;title&quot;: &quot;Sed temporibus excepturi at et ut.&quot;,
                &quot;description&quot;: &quot;Aperiam nemo dolorem ut sed impedit qui aut omnis veniam aut tenetur quam incidunt suscipit et assumenda.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
            },
            {
                &quot;id&quot;: 8,
                &quot;category_id&quot;: 1,
                &quot;title&quot;: &quot;Itaque ab quod enim libero architecto.&quot;,
                &quot;description&quot;: &quot;Delectus ipsa alias reprehenderit at beatae dolorem dolor omnis id expedita aut enim.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
            },
            {
                &quot;id&quot;: 3,
                &quot;category_id&quot;: 1,
                &quot;title&quot;: &quot;Ut porro omnis similique recusandae et.&quot;,
                &quot;description&quot;: &quot;Quis in omnis ducimus quae et laboriosam laboriosam ipsam minima eveniet excepturi nam inventore beatae distinctio ea aliquam labore.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
            },
            {
                &quot;id&quot;: 1,
                &quot;category_id&quot;: 1,
                &quot;title&quot;: &quot;Omnis quo cupiditate consequatur neque esse.&quot;,
                &quot;description&quot;: &quot;Rem quibusdam molestiae et consequatur voluptatem repudiandae repellat voluptas voluptas voluptatem harum ipsa ratione voluptatem ipsum voluptatum debitis odit.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
            },
            {
                &quot;id&quot;: 5,
                &quot;category_id&quot;: 1,
                &quot;title&quot;: &quot;Adipisci consequatur aut dolor.&quot;,
                &quot;description&quot;: &quot;Dolor ex eum delectus maiores atque ut consequatur quos quod est ut et ut consequatur laudantium eius saepe voluptatem.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
            },
            {
                &quot;id&quot;: 10,
                &quot;category_id&quot;: 1,
                &quot;title&quot;: &quot;Illum velit corporis ipsum a.&quot;,
                &quot;description&quot;: &quot;Odit voluptatem ipsam quia nihil et molestias in voluptatem fugit porro laborum consequatur voluptatem sapiente id et neque cum.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
            },
            {
                &quot;id&quot;: 7,
                &quot;category_id&quot;: 1,
                &quot;title&quot;: &quot;Consequatur incidunt et.&quot;,
                &quot;description&quot;: &quot;Debitis vitae repudiandae aliquid corrupti porro repellat repellat mollitia velit.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
            }
        ]
    },
    {
        &quot;id&quot;: 6,
        &quot;name&quot;: &quot;Edebiyat&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
        &quot;quizzes&quot;: [
            {
                &quot;id&quot;: 58,
                &quot;category_id&quot;: 6,
                &quot;title&quot;: &quot;Ea dolores enim iste in provident.&quot;,
                &quot;description&quot;: &quot;Delectus et aut et possimus cumque vel omnis dolore temporibus.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;
            },
            {
                &quot;id&quot;: 59,
                &quot;category_id&quot;: 6,
                &quot;title&quot;: &quot;Ut distinctio quo numquam dignissimos.&quot;,
                &quot;description&quot;: &quot;Blanditiis enim necessitatibus qui dolor voluptate sequi suscipit aut omnis a.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;
            },
            {
                &quot;id&quot;: 51,
                &quot;category_id&quot;: 6,
                &quot;title&quot;: &quot;Corporis omnis est saepe.&quot;,
                &quot;description&quot;: &quot;Ipsam omnis error qui ratione excepturi expedita quo provident officiis quia omnis reprehenderit saepe ea aperiam consequuntur iure neque quo.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;
            },
            {
                &quot;id&quot;: 55,
                &quot;category_id&quot;: 6,
                &quot;title&quot;: &quot;Perferendis non autem vitae possimus.&quot;,
                &quot;description&quot;: &quot;Explicabo dolores dolorum molestiae beatae vel tenetur dolorem provident cupiditate porro.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;
            },
            {
                &quot;id&quot;: 57,
                &quot;category_id&quot;: 6,
                &quot;title&quot;: &quot;Doloribus quia aut vel aliquid.&quot;,
                &quot;description&quot;: &quot;Facere perferendis corrupti aliquid itaque odio quo nobis maiores dicta voluptate.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;
            },
            {
                &quot;id&quot;: 52,
                &quot;category_id&quot;: 6,
                &quot;title&quot;: &quot;Aut sapiente possimus.&quot;,
                &quot;description&quot;: &quot;Ex assumenda error vel facere eum optio ipsam exercitationem a debitis incidunt minus consequuntur.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;
            },
            {
                &quot;id&quot;: 54,
                &quot;category_id&quot;: 6,
                &quot;title&quot;: &quot;Nemo dolores blanditiis odit autem ea.&quot;,
                &quot;description&quot;: &quot;Dignissimos blanditiis magni sed et perspiciatis animi enim voluptatibus illum hic et aut quis debitis dignissimos similique maxime.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;
            },
            {
                &quot;id&quot;: 56,
                &quot;category_id&quot;: 6,
                &quot;title&quot;: &quot;Alias vero sed qui facere.&quot;,
                &quot;description&quot;: &quot;Pariatur vel asperiores saepe numquam ullam quam eius et commodi et aut labore sit quidem et.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;
            },
            {
                &quot;id&quot;: 53,
                &quot;category_id&quot;: 6,
                &quot;title&quot;: &quot;Eaque fugiat aut quas.&quot;,
                &quot;description&quot;: &quot;Qui fuga sunt rerum dolores numquam saepe asperiores ut placeat qui distinctio commodi autem aspernatur aliquid ipsa veniam aut.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;
            },
            {
                &quot;id&quot;: 60,
                &quot;category_id&quot;: 6,
                &quot;title&quot;: &quot;Dolor qui expedita incidunt veritatis.&quot;,
                &quot;description&quot;: &quot;Rerum sunt quis consequatur modi debitis veritatis consequatur soluta reprehenderit exercitationem.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;
            }
        ]
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Fizik&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
        &quot;quizzes&quot;: [
            {
                &quot;id&quot;: 14,
                &quot;category_id&quot;: 2,
                &quot;title&quot;: &quot;Excepturi velit veritatis aut.&quot;,
                &quot;description&quot;: &quot;Dignissimos id voluptas est quia et quaerat recusandae nisi quia voluptatem sed.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;
            },
            {
                &quot;id&quot;: 11,
                &quot;category_id&quot;: 2,
                &quot;title&quot;: &quot;Voluptatem qui rerum deleniti architecto aut.&quot;,
                &quot;description&quot;: &quot;Veniam est et numquam beatae et qui voluptas voluptas nesciunt et necessitatibus autem odit aspernatur fugit libero numquam voluptatum.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;
            },
            {
                &quot;id&quot;: 19,
                &quot;category_id&quot;: 2,
                &quot;title&quot;: &quot;Dolorum illo accusantium.&quot;,
                &quot;description&quot;: &quot;Et libero exercitationem ea alias ut tempore explicabo doloremque debitis illum.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;
            },
            {
                &quot;id&quot;: 18,
                &quot;category_id&quot;: 2,
                &quot;title&quot;: &quot;Natus porro et est.&quot;,
                &quot;description&quot;: &quot;Quisquam est qui ex iure excepturi earum natus deleniti enim nisi animi dolores.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;
            },
            {
                &quot;id&quot;: 16,
                &quot;category_id&quot;: 2,
                &quot;title&quot;: &quot;Quaerat et non eveniet dicta.&quot;,
                &quot;description&quot;: &quot;Omnis quia et at et occaecati voluptates hic in sunt nesciunt laboriosam corporis ullam non repellat labore.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;
            },
            {
                &quot;id&quot;: 20,
                &quot;category_id&quot;: 2,
                &quot;title&quot;: &quot;Aliquid dolorem consequuntur non repellat.&quot;,
                &quot;description&quot;: &quot;Dignissimos porro ut rem explicabo id et dolore quis dolorem et quia laborum fugit ea omnis saepe eum impedit dolores qui.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;
            },
            {
                &quot;id&quot;: 15,
                &quot;category_id&quot;: 2,
                &quot;title&quot;: &quot;Voluptas alias eos ab laudantium debitis.&quot;,
                &quot;description&quot;: &quot;Eos distinctio tempora consequuntur qui et ducimus dolorem eos repellat beatae fuga harum dolores consectetur veritatis repellendus expedita et omnis sed.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;
            },
            {
                &quot;id&quot;: 17,
                &quot;category_id&quot;: 2,
                &quot;title&quot;: &quot;Sunt soluta ut.&quot;,
                &quot;description&quot;: &quot;Porro est quos nemo corporis dolor sint veritatis est eum reprehenderit voluptatem consequatur soluta quia inventore consequatur in odit rerum.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;
            },
            {
                &quot;id&quot;: 13,
                &quot;category_id&quot;: 2,
                &quot;title&quot;: &quot;Aut nihil commodi excepturi aliquam.&quot;,
                &quot;description&quot;: &quot;Dolor eaque iusto expedita non sit mollitia velit recusandae illum esse omnis aut id sit fugit illo.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;
            },
            {
                &quot;id&quot;: 12,
                &quot;category_id&quot;: 2,
                &quot;title&quot;: &quot;Rem non eos.&quot;,
                &quot;description&quot;: &quot;Nisi voluptatem enim ducimus qui nobis eos optio velit ut facere autem magni qui non doloribus mollitia quos magni.&quot;,
                &quot;created_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;
            }
        ]
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-getCategories" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-getCategories"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-getCategories"></code></pre>
</span>
<span id="execution-error-GETapi-getCategories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-getCategories"></code></pre>
</span>
<form id="form-GETapi-getCategories" data-method="GET"
      data-path="api/getCategories"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-getCategories', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-getCategories"
                    onclick="tryItOut('GETapi-getCategories');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-getCategories"
                    onclick="cancelTryOut('GETapi-getCategories');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-getCategories" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/getCategories</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>with_quizzes</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETapi-getCategories" hidden>
            <input type="radio" name="with_quizzes"
                   value="true"
                   data-endpoint="GETapi-getCategories"
                   data-component="body"
            >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-getCategories" hidden>
            <input type="radio" name="with_quizzes"
                   value="false"
                   data-endpoint="GETapi-getCategories"
                   data-component="body"
            >
            <code>false</code>
        </label>
    <br>

        </p>
                <p>
            <b><code>random_categories</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETapi-getCategories" hidden>
            <input type="radio" name="random_categories"
                   value="true"
                   data-endpoint="GETapi-getCategories"
                   data-component="body"
            >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-getCategories" hidden>
            <input type="radio" name="random_categories"
                   value="false"
                   data-endpoint="GETapi-getCategories"
                   data-component="body"
            >
            <code>false</code>
        </label>
    <br>

        </p>
                <p>
            <b><code>random_quizzes</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETapi-getCategories" hidden>
            <input type="radio" name="random_quizzes"
                   value="true"
                   data-endpoint="GETapi-getCategories"
                   data-component="body"
            >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-getCategories" hidden>
            <input type="radio" name="random_quizzes"
                   value="false"
                   data-endpoint="GETapi-getCategories"
                   data-component="body"
            >
            <code>false</code>
        </label>
    <br>

        </p>
        </form>

            <h2 id="quiz-endpoints-GETapi-getCategoryById--id-">Get Category By Id</h2>

<p>
</p>



<span id="example-requests-GETapi-getCategoryById--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://quizlaravel.test/api/getCategoryById/3" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"id\": 3,
    \"with_quizzes\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://quizlaravel.test/api/getCategoryById/3"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 3,
    "with_quizzes": false
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-getCategoryById--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;id&quot;: 3,
    &quot;name&quot;: &quot;Matematik&quot;,
    &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
    &quot;quizzes&quot;: [
        {
            &quot;id&quot;: 21,
            &quot;category_id&quot;: 3,
            &quot;title&quot;: &quot;Voluptatum nobis dignissimos.&quot;,
            &quot;description&quot;: &quot;Eos pariatur dolores ea voluptates rerum impedit non dolores enim natus.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
        },
        {
            &quot;id&quot;: 22,
            &quot;category_id&quot;: 3,
            &quot;title&quot;: &quot;Quisquam assumenda ducimus laborum.&quot;,
            &quot;description&quot;: &quot;Aspernatur ut corporis corporis non nesciunt et voluptas officia aut dolorum nam id.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
        },
        {
            &quot;id&quot;: 23,
            &quot;category_id&quot;: 3,
            &quot;title&quot;: &quot;Optio temporibus molestias magni dolorum.&quot;,
            &quot;description&quot;: &quot;Pariatur et modi laboriosam cum consequatur quibusdam voluptatibus sit quaerat ut consequatur explicabo sit voluptatibus dolorem nam.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
        },
        {
            &quot;id&quot;: 24,
            &quot;category_id&quot;: 3,
            &quot;title&quot;: &quot;Aliquid harum et fugiat dolor qui.&quot;,
            &quot;description&quot;: &quot;Recusandae optio aut velit qui voluptas tempora velit excepturi beatae similique ea unde rerum.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
        },
        {
            &quot;id&quot;: 25,
            &quot;category_id&quot;: 3,
            &quot;title&quot;: &quot;Facilis est et minima.&quot;,
            &quot;description&quot;: &quot;Ratione dolorem voluptatem et corrupti et earum dignissimos commodi saepe enim.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
        },
        {
            &quot;id&quot;: 26,
            &quot;category_id&quot;: 3,
            &quot;title&quot;: &quot;Ipsa aut voluptatem dolorem quaerat.&quot;,
            &quot;description&quot;: &quot;Amet quia nesciunt aut voluptatibus inventore doloribus itaque dolor dolorum.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
        },
        {
            &quot;id&quot;: 27,
            &quot;category_id&quot;: 3,
            &quot;title&quot;: &quot;Doloribus eius suscipit praesentium.&quot;,
            &quot;description&quot;: &quot;Voluptatem fugiat qui animi omnis aut quaerat aut aut recusandae.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
        },
        {
            &quot;id&quot;: 28,
            &quot;category_id&quot;: 3,
            &quot;title&quot;: &quot;Id ut aut consequatur voluptatum.&quot;,
            &quot;description&quot;: &quot;Eum non occaecati et omnis ut error nesciunt ipsum sapiente magnam occaecati omnis voluptatem incidunt enim cupiditate voluptatem.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
        },
        {
            &quot;id&quot;: 29,
            &quot;category_id&quot;: 3,
            &quot;title&quot;: &quot;Reiciendis possimus similique ut.&quot;,
            &quot;description&quot;: &quot;Perspiciatis voluptates ipsam dolorum et similique non aperiam saepe non aut necessitatibus harum id quia tempore sed animi inventore.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
        },
        {
            &quot;id&quot;: 30,
            &quot;category_id&quot;: 3,
            &quot;title&quot;: &quot;Dolorem quia nisi sunt dolores consequatur.&quot;,
            &quot;description&quot;: &quot;Perferendis quidem rerum omnis voluptatem pariatur eaque ab hic quo accusantium quo dolorem officiis et voluptate et non aperiam occaecati eum.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-getCategoryById--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-getCategoryById--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-getCategoryById--id-"></code></pre>
</span>
<span id="execution-error-GETapi-getCategoryById--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-getCategoryById--id-"></code></pre>
</span>
<form id="form-GETapi-getCategoryById--id-" data-method="GET"
      data-path="api/getCategoryById/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-getCategoryById--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-getCategoryById--id-"
                    onclick="tryItOut('GETapi-getCategoryById--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-getCategoryById--id-"
                    onclick="cancelTryOut('GETapi-getCategoryById--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-getCategoryById--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/getCategoryById/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-getCategoryById--id-"
               value="3"
               data-component="url" hidden>
    <br>
<p>The ID of the quiz category</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-getCategoryById--id-"
               value="3"
               data-component="body" hidden>
    <br>
<p>The ID of the quiz category</p>
        </p>
                <p>
            <b><code>with_quizzes</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETapi-getCategoryById--id-" hidden>
            <input type="radio" name="with_quizzes"
                   value="true"
                   data-endpoint="GETapi-getCategoryById--id-"
                   data-component="body"
            >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-getCategoryById--id-" hidden>
            <input type="radio" name="with_quizzes"
                   value="false"
                   data-endpoint="GETapi-getCategoryById--id-"
                   data-component="body"
            >
            <code>false</code>
        </label>
    <br>

        </p>
        </form>

            <h2 id="quiz-endpoints-GETapi-getQuizzes">Get All Quizzes</h2>

<p>
</p>



<span id="example-requests-GETapi-getQuizzes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://quizlaravel.test/api/getQuizzes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"with_category\": true,
    \"with_quiz_count\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://quizlaravel.test/api/getQuizzes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "with_category": true,
    "with_quiz_count": false
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-getQuizzes">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 1,
        &quot;category_id&quot;: 1,
        &quot;category&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Kimya&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Omnis quo cupiditate consequatur neque esse.&quot;,
        &quot;description&quot;: &quot;Rem quibusdam molestiae et consequatur voluptatem repudiandae repellat voluptas voluptas voluptatem harum ipsa ratione voluptatem ipsum voluptatum debitis odit.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;category_id&quot;: 1,
        &quot;category&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Kimya&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Impedit porro omnis.&quot;,
        &quot;description&quot;: &quot;Laborum minima dolor molestiae consequuntur nam est minus non illum fugiat voluptatem vel placeat numquam qui a iusto.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
    },
    {
        &quot;id&quot;: 3,
        &quot;category_id&quot;: 1,
        &quot;category&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Kimya&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Ut porro omnis similique recusandae et.&quot;,
        &quot;description&quot;: &quot;Quis in omnis ducimus quae et laboriosam laboriosam ipsam minima eveniet excepturi nam inventore beatae distinctio ea aliquam labore.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
    },
    {
        &quot;id&quot;: 4,
        &quot;category_id&quot;: 1,
        &quot;category&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Kimya&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Et non ipsam ex illum.&quot;,
        &quot;description&quot;: &quot;Vel odit velit omnis quos illo praesentium nisi eaque maiores et non recusandae id itaque unde et.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
    },
    {
        &quot;id&quot;: 5,
        &quot;category_id&quot;: 1,
        &quot;category&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Kimya&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Adipisci consequatur aut dolor.&quot;,
        &quot;description&quot;: &quot;Dolor ex eum delectus maiores atque ut consequatur quos quod est ut et ut consequatur laudantium eius saepe voluptatem.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
    },
    {
        &quot;id&quot;: 6,
        &quot;category_id&quot;: 1,
        &quot;category&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Kimya&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;A aut natus dignissimos.&quot;,
        &quot;description&quot;: &quot;Consequatur fugiat iusto eos non deleniti corrupti dignissimos est assumenda quis culpa optio nisi unde.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
    },
    {
        &quot;id&quot;: 7,
        &quot;category_id&quot;: 1,
        &quot;category&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Kimya&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Consequatur incidunt et.&quot;,
        &quot;description&quot;: &quot;Debitis vitae repudiandae aliquid corrupti porro repellat repellat mollitia velit.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
    },
    {
        &quot;id&quot;: 8,
        &quot;category_id&quot;: 1,
        &quot;category&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Kimya&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Itaque ab quod enim libero architecto.&quot;,
        &quot;description&quot;: &quot;Delectus ipsa alias reprehenderit at beatae dolorem dolor omnis id expedita aut enim.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
    },
    {
        &quot;id&quot;: 9,
        &quot;category_id&quot;: 1,
        &quot;category&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Kimya&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Sed temporibus excepturi at et ut.&quot;,
        &quot;description&quot;: &quot;Aperiam nemo dolorem ut sed impedit qui aut omnis veniam aut tenetur quam incidunt suscipit et assumenda.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
    },
    {
        &quot;id&quot;: 10,
        &quot;category_id&quot;: 1,
        &quot;category&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Kimya&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Illum velit corporis ipsum a.&quot;,
        &quot;description&quot;: &quot;Odit voluptatem ipsam quia nihil et molestias in voluptatem fugit porro laborum consequatur voluptatem sapiente id et neque cum.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
    },
    {
        &quot;id&quot;: 11,
        &quot;category_id&quot;: 2,
        &quot;category&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Fizik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Voluptatem qui rerum deleniti architecto aut.&quot;,
        &quot;description&quot;: &quot;Veniam est et numquam beatae et qui voluptas voluptas nesciunt et necessitatibus autem odit aspernatur fugit libero numquam voluptatum.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;
    },
    {
        &quot;id&quot;: 12,
        &quot;category_id&quot;: 2,
        &quot;category&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Fizik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Rem non eos.&quot;,
        &quot;description&quot;: &quot;Nisi voluptatem enim ducimus qui nobis eos optio velit ut facere autem magni qui non doloribus mollitia quos magni.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;
    },
    {
        &quot;id&quot;: 13,
        &quot;category_id&quot;: 2,
        &quot;category&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Fizik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Aut nihil commodi excepturi aliquam.&quot;,
        &quot;description&quot;: &quot;Dolor eaque iusto expedita non sit mollitia velit recusandae illum esse omnis aut id sit fugit illo.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;
    },
    {
        &quot;id&quot;: 14,
        &quot;category_id&quot;: 2,
        &quot;category&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Fizik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Excepturi velit veritatis aut.&quot;,
        &quot;description&quot;: &quot;Dignissimos id voluptas est quia et quaerat recusandae nisi quia voluptatem sed.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;
    },
    {
        &quot;id&quot;: 15,
        &quot;category_id&quot;: 2,
        &quot;category&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Fizik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Voluptas alias eos ab laudantium debitis.&quot;,
        &quot;description&quot;: &quot;Eos distinctio tempora consequuntur qui et ducimus dolorem eos repellat beatae fuga harum dolores consectetur veritatis repellendus expedita et omnis sed.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;
    },
    {
        &quot;id&quot;: 16,
        &quot;category_id&quot;: 2,
        &quot;category&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Fizik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Quaerat et non eveniet dicta.&quot;,
        &quot;description&quot;: &quot;Omnis quia et at et occaecati voluptates hic in sunt nesciunt laboriosam corporis ullam non repellat labore.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;
    },
    {
        &quot;id&quot;: 17,
        &quot;category_id&quot;: 2,
        &quot;category&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Fizik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Sunt soluta ut.&quot;,
        &quot;description&quot;: &quot;Porro est quos nemo corporis dolor sint veritatis est eum reprehenderit voluptatem consequatur soluta quia inventore consequatur in odit rerum.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;
    },
    {
        &quot;id&quot;: 18,
        &quot;category_id&quot;: 2,
        &quot;category&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Fizik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Natus porro et est.&quot;,
        &quot;description&quot;: &quot;Quisquam est qui ex iure excepturi earum natus deleniti enim nisi animi dolores.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;
    },
    {
        &quot;id&quot;: 19,
        &quot;category_id&quot;: 2,
        &quot;category&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Fizik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Dolorum illo accusantium.&quot;,
        &quot;description&quot;: &quot;Et libero exercitationem ea alias ut tempore explicabo doloremque debitis illum.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;
    },
    {
        &quot;id&quot;: 20,
        &quot;category_id&quot;: 2,
        &quot;category&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Fizik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Aliquid dolorem consequuntur non repellat.&quot;,
        &quot;description&quot;: &quot;Dignissimos porro ut rem explicabo id et dolore quis dolorem et quia laborum fugit ea omnis saepe eum impedit dolores qui.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;
    },
    {
        &quot;id&quot;: 21,
        &quot;category_id&quot;: 3,
        &quot;category&quot;: {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Matematik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Voluptatum nobis dignissimos.&quot;,
        &quot;description&quot;: &quot;Eos pariatur dolores ea voluptates rerum impedit non dolores enim natus.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
    },
    {
        &quot;id&quot;: 22,
        &quot;category_id&quot;: 3,
        &quot;category&quot;: {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Matematik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Quisquam assumenda ducimus laborum.&quot;,
        &quot;description&quot;: &quot;Aspernatur ut corporis corporis non nesciunt et voluptas officia aut dolorum nam id.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
    },
    {
        &quot;id&quot;: 23,
        &quot;category_id&quot;: 3,
        &quot;category&quot;: {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Matematik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Optio temporibus molestias magni dolorum.&quot;,
        &quot;description&quot;: &quot;Pariatur et modi laboriosam cum consequatur quibusdam voluptatibus sit quaerat ut consequatur explicabo sit voluptatibus dolorem nam.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
    },
    {
        &quot;id&quot;: 24,
        &quot;category_id&quot;: 3,
        &quot;category&quot;: {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Matematik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Aliquid harum et fugiat dolor qui.&quot;,
        &quot;description&quot;: &quot;Recusandae optio aut velit qui voluptas tempora velit excepturi beatae similique ea unde rerum.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
    },
    {
        &quot;id&quot;: 25,
        &quot;category_id&quot;: 3,
        &quot;category&quot;: {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Matematik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Facilis est et minima.&quot;,
        &quot;description&quot;: &quot;Ratione dolorem voluptatem et corrupti et earum dignissimos commodi saepe enim.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
    },
    {
        &quot;id&quot;: 26,
        &quot;category_id&quot;: 3,
        &quot;category&quot;: {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Matematik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Ipsa aut voluptatem dolorem quaerat.&quot;,
        &quot;description&quot;: &quot;Amet quia nesciunt aut voluptatibus inventore doloribus itaque dolor dolorum.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
    },
    {
        &quot;id&quot;: 27,
        &quot;category_id&quot;: 3,
        &quot;category&quot;: {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Matematik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Doloribus eius suscipit praesentium.&quot;,
        &quot;description&quot;: &quot;Voluptatem fugiat qui animi omnis aut quaerat aut aut recusandae.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
    },
    {
        &quot;id&quot;: 28,
        &quot;category_id&quot;: 3,
        &quot;category&quot;: {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Matematik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Id ut aut consequatur voluptatum.&quot;,
        &quot;description&quot;: &quot;Eum non occaecati et omnis ut error nesciunt ipsum sapiente magnam occaecati omnis voluptatem incidunt enim cupiditate voluptatem.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
    },
    {
        &quot;id&quot;: 29,
        &quot;category_id&quot;: 3,
        &quot;category&quot;: {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Matematik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Reiciendis possimus similique ut.&quot;,
        &quot;description&quot;: &quot;Perspiciatis voluptates ipsam dolorum et similique non aperiam saepe non aut necessitatibus harum id quia tempore sed animi inventore.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
    },
    {
        &quot;id&quot;: 30,
        &quot;category_id&quot;: 3,
        &quot;category&quot;: {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Matematik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Dolorem quia nisi sunt dolores consequatur.&quot;,
        &quot;description&quot;: &quot;Perferendis quidem rerum omnis voluptatem pariatur eaque ab hic quo accusantium quo dolorem officiis et voluptate et non aperiam occaecati eum.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:13.000000Z&quot;
    },
    {
        &quot;id&quot;: 31,
        &quot;category_id&quot;: 4,
        &quot;category&quot;: {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Genel K&uuml;lt&uuml;r&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Repudiandae ut incidunt iste.&quot;,
        &quot;description&quot;: &quot;Sed asperiores alias sit et dolorem aut perspiciatis vel nemo aperiam est ea voluptatem dolorum alias quod consectetur.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;
    },
    {
        &quot;id&quot;: 32,
        &quot;category_id&quot;: 4,
        &quot;category&quot;: {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Genel K&uuml;lt&uuml;r&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Et et voluptate dolor nesciunt mollitia.&quot;,
        &quot;description&quot;: &quot;Itaque deleniti enim hic sit nihil eum voluptatum vel consequatur perspiciatis commodi animi nisi.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;
    },
    {
        &quot;id&quot;: 33,
        &quot;category_id&quot;: 4,
        &quot;category&quot;: {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Genel K&uuml;lt&uuml;r&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Illum ducimus laborum odit.&quot;,
        &quot;description&quot;: &quot;Nemo velit et sed iste eaque optio omnis voluptate est.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;
    },
    {
        &quot;id&quot;: 34,
        &quot;category_id&quot;: 4,
        &quot;category&quot;: {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Genel K&uuml;lt&uuml;r&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Error voluptates mollitia laboriosam.&quot;,
        &quot;description&quot;: &quot;Sunt magni magnam vero ullam id quia debitis tempora distinctio ex voluptas et sit non rem optio numquam.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;
    },
    {
        &quot;id&quot;: 35,
        &quot;category_id&quot;: 4,
        &quot;category&quot;: {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Genel K&uuml;lt&uuml;r&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Et sed expedita.&quot;,
        &quot;description&quot;: &quot;Aliquam optio et natus et quis eum et adipisci odit in error iusto aut deserunt quae voluptas sit aut illo.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;
    },
    {
        &quot;id&quot;: 36,
        &quot;category_id&quot;: 4,
        &quot;category&quot;: {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Genel K&uuml;lt&uuml;r&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Placeat esse quas nulla fugit et.&quot;,
        &quot;description&quot;: &quot;Nulla et eos hic ut sed ipsam a doloremque harum ipsa.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;
    },
    {
        &quot;id&quot;: 37,
        &quot;category_id&quot;: 4,
        &quot;category&quot;: {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Genel K&uuml;lt&uuml;r&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Iste aliquid in optio.&quot;,
        &quot;description&quot;: &quot;Facere excepturi quasi ipsam quidem eum qui nemo sint omnis quo laudantium qui quaerat tempore et est et voluptas.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;
    },
    {
        &quot;id&quot;: 38,
        &quot;category_id&quot;: 4,
        &quot;category&quot;: {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Genel K&uuml;lt&uuml;r&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Suscipit cum eius esse neque.&quot;,
        &quot;description&quot;: &quot;Pariatur aliquam eius eius praesentium voluptatem excepturi eligendi enim libero consequatur et est praesentium sint reprehenderit deleniti.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;
    },
    {
        &quot;id&quot;: 39,
        &quot;category_id&quot;: 4,
        &quot;category&quot;: {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Genel K&uuml;lt&uuml;r&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Provident quo ducimus pariatur.&quot;,
        &quot;description&quot;: &quot;Reprehenderit unde laudantium est ratione ea eius deleniti qui quia voluptatem facilis quae voluptas ut molestias aut.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;
    },
    {
        &quot;id&quot;: 40,
        &quot;category_id&quot;: 4,
        &quot;category&quot;: {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Genel K&uuml;lt&uuml;r&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Soluta saepe optio ab qui.&quot;,
        &quot;description&quot;: &quot;Dignissimos qui sit veritatis necessitatibus expedita occaecati est corporis consequatur et ut quibusdam ratione aliquid.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:18.000000Z&quot;
    },
    {
        &quot;id&quot;: 41,
        &quot;category_id&quot;: 5,
        &quot;category&quot;: {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Diğer&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Magni excepturi excepturi sunt consequatur.&quot;,
        &quot;description&quot;: &quot;Optio repudiandae totam cumque sunt odio dolorem sed rem iusto molestiae non sint voluptatum voluptas molestias.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;
    },
    {
        &quot;id&quot;: 42,
        &quot;category_id&quot;: 5,
        &quot;category&quot;: {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Diğer&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Dolorem ad eum vel corporis.&quot;,
        &quot;description&quot;: &quot;Qui consequatur consequatur quos sed ullam numquam nobis blanditiis et magni enim sunt amet.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;
    },
    {
        &quot;id&quot;: 43,
        &quot;category_id&quot;: 5,
        &quot;category&quot;: {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Diğer&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Minus rerum et aspernatur.&quot;,
        &quot;description&quot;: &quot;Minima aut quia dolor corrupti voluptate iusto earum nemo est culpa.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;
    },
    {
        &quot;id&quot;: 44,
        &quot;category_id&quot;: 5,
        &quot;category&quot;: {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Diğer&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Similique voluptas quod.&quot;,
        &quot;description&quot;: &quot;Sequi illum error aut est eos et labore amet eligendi corrupti id voluptas vitae non quas aut quo enim.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;
    },
    {
        &quot;id&quot;: 45,
        &quot;category_id&quot;: 5,
        &quot;category&quot;: {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Diğer&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Veniam quod perspiciatis.&quot;,
        &quot;description&quot;: &quot;Ut consequuntur autem et animi maiores sit voluptates aut similique reiciendis nisi quis aliquid non voluptates laborum aliquid molestiae.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;
    },
    {
        &quot;id&quot;: 46,
        &quot;category_id&quot;: 5,
        &quot;category&quot;: {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Diğer&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Distinctio est doloremque voluptates autem.&quot;,
        &quot;description&quot;: &quot;Quia aut voluptates nam aut consequatur enim dolore autem temporibus ducimus molestiae ut.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;
    },
    {
        &quot;id&quot;: 47,
        &quot;category_id&quot;: 5,
        &quot;category&quot;: {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Diğer&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Voluptate incidunt modi.&quot;,
        &quot;description&quot;: &quot;Ut et et maxime assumenda corrupti aut et ab sed.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;
    },
    {
        &quot;id&quot;: 48,
        &quot;category_id&quot;: 5,
        &quot;category&quot;: {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Diğer&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Porro omnis quibusdam eaque eligendi.&quot;,
        &quot;description&quot;: &quot;Suscipit placeat in est hic ducimus quaerat ipsum qui temporibus aliquid fugit eligendi amet sed ex amet.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;
    },
    {
        &quot;id&quot;: 49,
        &quot;category_id&quot;: 5,
        &quot;category&quot;: {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Diğer&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Quam sed aut quibusdam.&quot;,
        &quot;description&quot;: &quot;Aut vel consequatur iure ut et velit voluptas laudantium blanditiis eaque fugiat nesciunt et.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;
    },
    {
        &quot;id&quot;: 50,
        &quot;category_id&quot;: 5,
        &quot;category&quot;: {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Diğer&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Corrupti dolore quo.&quot;,
        &quot;description&quot;: &quot;Iste in officia enim ut sit sint eligendi natus provident exercitationem odit.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:24.000000Z&quot;
    },
    {
        &quot;id&quot;: 51,
        &quot;category_id&quot;: 6,
        &quot;category&quot;: {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Edebiyat&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Corporis omnis est saepe.&quot;,
        &quot;description&quot;: &quot;Ipsam omnis error qui ratione excepturi expedita quo provident officiis quia omnis reprehenderit saepe ea aperiam consequuntur iure neque quo.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;
    },
    {
        &quot;id&quot;: 52,
        &quot;category_id&quot;: 6,
        &quot;category&quot;: {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Edebiyat&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Aut sapiente possimus.&quot;,
        &quot;description&quot;: &quot;Ex assumenda error vel facere eum optio ipsam exercitationem a debitis incidunt minus consequuntur.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;
    },
    {
        &quot;id&quot;: 53,
        &quot;category_id&quot;: 6,
        &quot;category&quot;: {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Edebiyat&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Eaque fugiat aut quas.&quot;,
        &quot;description&quot;: &quot;Qui fuga sunt rerum dolores numquam saepe asperiores ut placeat qui distinctio commodi autem aspernatur aliquid ipsa veniam aut.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;
    },
    {
        &quot;id&quot;: 54,
        &quot;category_id&quot;: 6,
        &quot;category&quot;: {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Edebiyat&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Nemo dolores blanditiis odit autem ea.&quot;,
        &quot;description&quot;: &quot;Dignissimos blanditiis magni sed et perspiciatis animi enim voluptatibus illum hic et aut quis debitis dignissimos similique maxime.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;
    },
    {
        &quot;id&quot;: 55,
        &quot;category_id&quot;: 6,
        &quot;category&quot;: {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Edebiyat&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Perferendis non autem vitae possimus.&quot;,
        &quot;description&quot;: &quot;Explicabo dolores dolorum molestiae beatae vel tenetur dolorem provident cupiditate porro.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;
    },
    {
        &quot;id&quot;: 56,
        &quot;category_id&quot;: 6,
        &quot;category&quot;: {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Edebiyat&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Alias vero sed qui facere.&quot;,
        &quot;description&quot;: &quot;Pariatur vel asperiores saepe numquam ullam quam eius et commodi et aut labore sit quidem et.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;
    },
    {
        &quot;id&quot;: 57,
        &quot;category_id&quot;: 6,
        &quot;category&quot;: {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Edebiyat&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Doloribus quia aut vel aliquid.&quot;,
        &quot;description&quot;: &quot;Facere perferendis corrupti aliquid itaque odio quo nobis maiores dicta voluptate.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;
    },
    {
        &quot;id&quot;: 58,
        &quot;category_id&quot;: 6,
        &quot;category&quot;: {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Edebiyat&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Ea dolores enim iste in provident.&quot;,
        &quot;description&quot;: &quot;Delectus et aut et possimus cumque vel omnis dolore temporibus.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;
    },
    {
        &quot;id&quot;: 59,
        &quot;category_id&quot;: 6,
        &quot;category&quot;: {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Edebiyat&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Ut distinctio quo numquam dignissimos.&quot;,
        &quot;description&quot;: &quot;Blanditiis enim necessitatibus qui dolor voluptate sequi suscipit aut omnis a.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;
    },
    {
        &quot;id&quot;: 60,
        &quot;category_id&quot;: 6,
        &quot;category&quot;: {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Edebiyat&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Dolor qui expedita incidunt veritatis.&quot;,
        &quot;description&quot;: &quot;Rerum sunt quis consequatur modi debitis veritatis consequatur soluta reprehenderit exercitationem.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:29.000000Z&quot;
    },
    {
        &quot;id&quot;: 61,
        &quot;category_id&quot;: 7,
        &quot;category&quot;: {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;M&uuml;zik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Unde sed sequi omnis sunt necessitatibus.&quot;,
        &quot;description&quot;: &quot;Repellendus vel numquam magnam asperiores velit tempora reiciendis et eius alias quis voluptas quae et labore dolorem ullam nemo aut.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;
    },
    {
        &quot;id&quot;: 62,
        &quot;category_id&quot;: 7,
        &quot;category&quot;: {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;M&uuml;zik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Doloribus nulla iste minima qui.&quot;,
        &quot;description&quot;: &quot;Est vel neque ut est non dolores eligendi mollitia et libero et unde dolor distinctio consequatur ut officiis recusandae mollitia.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;
    },
    {
        &quot;id&quot;: 63,
        &quot;category_id&quot;: 7,
        &quot;category&quot;: {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;M&uuml;zik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Recusandae at et molestias itaque.&quot;,
        &quot;description&quot;: &quot;Reiciendis quo fuga et rerum amet et deserunt delectus voluptatum fugiat reprehenderit beatae et hic iste enim.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;
    },
    {
        &quot;id&quot;: 64,
        &quot;category_id&quot;: 7,
        &quot;category&quot;: {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;M&uuml;zik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Perferendis qui modi.&quot;,
        &quot;description&quot;: &quot;Consequatur error error id quam officia exercitationem est dignissimos dolore id laudantium non aliquid eos.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;
    },
    {
        &quot;id&quot;: 65,
        &quot;category_id&quot;: 7,
        &quot;category&quot;: {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;M&uuml;zik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Eos voluptas nihil dolore.&quot;,
        &quot;description&quot;: &quot;Et et deserunt dolores cum ipsam reprehenderit autem debitis cumque hic aut dolorem nam impedit quia.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;
    },
    {
        &quot;id&quot;: 66,
        &quot;category_id&quot;: 7,
        &quot;category&quot;: {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;M&uuml;zik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;In eligendi mollitia non voluptas odit.&quot;,
        &quot;description&quot;: &quot;Occaecati et omnis omnis sit deleniti vel qui vel enim.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;
    },
    {
        &quot;id&quot;: 67,
        &quot;category_id&quot;: 7,
        &quot;category&quot;: {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;M&uuml;zik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Accusantium quis enim eius.&quot;,
        &quot;description&quot;: &quot;Quae ea qui harum ut eaque ipsa exercitationem beatae et sint ipsam quidem corrupti ducimus ex earum dolorem.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;
    },
    {
        &quot;id&quot;: 68,
        &quot;category_id&quot;: 7,
        &quot;category&quot;: {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;M&uuml;zik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Nemo pariatur libero.&quot;,
        &quot;description&quot;: &quot;Molestias molestias minus harum ea voluptatem ex quo consequatur et doloribus in id libero.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;
    },
    {
        &quot;id&quot;: 69,
        &quot;category_id&quot;: 7,
        &quot;category&quot;: {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;M&uuml;zik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Animi natus molestiae asperiores.&quot;,
        &quot;description&quot;: &quot;Doloremque adipisci neque vel exercitationem beatae veritatis non molestiae eaque sed repellendus.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;
    },
    {
        &quot;id&quot;: 70,
        &quot;category_id&quot;: 7,
        &quot;category&quot;: {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;M&uuml;zik&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        &quot;title&quot;: &quot;Explicabo consectetur saepe porro voluptate.&quot;,
        &quot;description&quot;: &quot;Debitis temporibus ut quae odio illo sit sint dicta aspernatur accusantium aut cumque ipsam laudantium.&quot;,
        &quot;created_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-05-09T00:54:34.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-getQuizzes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-getQuizzes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-getQuizzes"></code></pre>
</span>
<span id="execution-error-GETapi-getQuizzes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-getQuizzes"></code></pre>
</span>
<form id="form-GETapi-getQuizzes" data-method="GET"
      data-path="api/getQuizzes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-getQuizzes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-getQuizzes"
                    onclick="tryItOut('GETapi-getQuizzes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-getQuizzes"
                    onclick="cancelTryOut('GETapi-getQuizzes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-getQuizzes" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/getQuizzes</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>with_category</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETapi-getQuizzes" hidden>
            <input type="radio" name="with_category"
                   value="true"
                   data-endpoint="GETapi-getQuizzes"
                   data-component="body"
            >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-getQuizzes" hidden>
            <input type="radio" name="with_category"
                   value="false"
                   data-endpoint="GETapi-getQuizzes"
                   data-component="body"
            >
            <code>false</code>
        </label>
    <br>

        </p>
                <p>
            <b><code>with_quiz_count</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETapi-getQuizzes" hidden>
            <input type="radio" name="with_quiz_count"
                   value="true"
                   data-endpoint="GETapi-getQuizzes"
                   data-component="body"
            >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-getQuizzes" hidden>
            <input type="radio" name="with_quiz_count"
                   value="false"
                   data-endpoint="GETapi-getQuizzes"
                   data-component="body"
            >
            <code>false</code>
        </label>
    <br>

        </p>
        </form>

            <h2 id="quiz-endpoints-GETapi-getQuizById--id-">Get Quiz by Id</h2>

<p>
</p>



<span id="example-requests-GETapi-getQuizById--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://quizlaravel.test/api/getQuizById/16" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"id\": 9,
    \"with_answers\": true,
    \"random_questions\": true,
    \"random_answers\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://quizlaravel.test/api/getQuizById/16"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 9,
    "with_answers": true,
    "random_questions": true,
    "random_answers": true
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-getQuizById--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;id&quot;: 16,
    &quot;category_id&quot;: 2,
    &quot;title&quot;: &quot;Quaerat et non eveniet dicta.&quot;,
    &quot;description&quot;: &quot;Omnis quia et at et occaecati voluptates hic in sunt nesciunt laboriosam corporis ullam non repellat labore.&quot;,
    &quot;created_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2022-05-09T00:54:08.000000Z&quot;,
    &quot;questions&quot;: [
        {
            &quot;id&quot;: 303,
            &quot;quiz_id&quot;: 16,
            &quot;question&quot;: &quot;Ut sapiente ducimus quae ullam unde quaerat corrupti facere voluptate iusto qui quia et numquam.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;answers&quot;: [
                {
                    &quot;id&quot;: 1514,
                    &quot;question_id&quot;: 303,
                    &quot;answer&quot;: &quot;Ut voluptatem est.&quot;,
                    &quot;is_true&quot;: true,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:41.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1515,
                    &quot;question_id&quot;: 303,
                    &quot;answer&quot;: &quot;Quod esse.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1512,
                    &quot;question_id&quot;: 303,
                    &quot;answer&quot;: &quot;Accusamus ut.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1511,
                    &quot;question_id&quot;: 303,
                    &quot;answer&quot;: &quot;Expedita tempora repellat.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1513,
                    &quot;question_id&quot;: 303,
                    &quot;answer&quot;: &quot;Voluptatem amet id.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 313,
            &quot;quiz_id&quot;: 16,
            &quot;question&quot;: &quot;Nam minus nostrum impedit occaecati aut et voluptas eos necessitatibus soluta voluptatibus delectus omnis nostrum ab.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;answers&quot;: [
                {
                    &quot;id&quot;: 1562,
                    &quot;question_id&quot;: 313,
                    &quot;answer&quot;: &quot;Aut nesciunt.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1561,
                    &quot;question_id&quot;: 313,
                    &quot;answer&quot;: &quot;Consequatur non et.&quot;,
                    &quot;is_true&quot;: true,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:41.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1565,
                    &quot;question_id&quot;: 313,
                    &quot;answer&quot;: &quot;Itaque doloribus.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1563,
                    &quot;question_id&quot;: 313,
                    &quot;answer&quot;: &quot;Ducimus praesentium quis.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1564,
                    &quot;question_id&quot;: 313,
                    &quot;answer&quot;: &quot;Aut aut.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 301,
            &quot;quiz_id&quot;: 16,
            &quot;question&quot;: &quot;Quod aliquid doloremque quae qui excepturi dolore hic voluptatem repellendus consequuntur enim blanditiis quia ut nisi.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;answers&quot;: [
                {
                    &quot;id&quot;: 1501,
                    &quot;question_id&quot;: 301,
                    &quot;answer&quot;: &quot;In sed.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1502,
                    &quot;question_id&quot;: 301,
                    &quot;answer&quot;: &quot;Id temporibus architecto.&quot;,
                    &quot;is_true&quot;: true,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:41.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1505,
                    &quot;question_id&quot;: 301,
                    &quot;answer&quot;: &quot;Eligendi aliquam.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1503,
                    &quot;question_id&quot;: 301,
                    &quot;answer&quot;: &quot;Dolores consectetur.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1504,
                    &quot;question_id&quot;: 301,
                    &quot;answer&quot;: &quot;Soluta perspiciatis.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 320,
            &quot;quiz_id&quot;: 16,
            &quot;question&quot;: &quot;Aut fugiat ullam rem quibusdam deserunt pariatur mollitia beatae et recusandae sunt aut omnis et qui.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;answers&quot;: [
                {
                    &quot;id&quot;: 1600,
                    &quot;question_id&quot;: 320,
                    &quot;answer&quot;: &quot;Beatae dicta.&quot;,
                    &quot;is_true&quot;: true,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:41.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1597,
                    &quot;question_id&quot;: 320,
                    &quot;answer&quot;: &quot;Eligendi deleniti.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1599,
                    &quot;question_id&quot;: 320,
                    &quot;answer&quot;: &quot;Culpa sit.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1598,
                    &quot;question_id&quot;: 320,
                    &quot;answer&quot;: &quot;Voluptates vel.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1596,
                    &quot;question_id&quot;: 320,
                    &quot;answer&quot;: &quot;Ut veritatis voluptas.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 308,
            &quot;quiz_id&quot;: 16,
            &quot;question&quot;: &quot;Vero aut et et aliquid sed deleniti consequuntur magni voluptatem.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;answers&quot;: [
                {
                    &quot;id&quot;: 1540,
                    &quot;question_id&quot;: 308,
                    &quot;answer&quot;: &quot;A quas iste.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1538,
                    &quot;question_id&quot;: 308,
                    &quot;answer&quot;: &quot;Repudiandae beatae.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1537,
                    &quot;question_id&quot;: 308,
                    &quot;answer&quot;: &quot;Explicabo consequuntur aliquam.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1539,
                    &quot;question_id&quot;: 308,
                    &quot;answer&quot;: &quot;Quia dolorum autem.&quot;,
                    &quot;is_true&quot;: true,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:41.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1536,
                    &quot;question_id&quot;: 308,
                    &quot;answer&quot;: &quot;Nostrum a.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 317,
            &quot;quiz_id&quot;: 16,
            &quot;question&quot;: &quot;Modi fuga provident molestias facere rerum quisquam placeat voluptatem a sint laboriosam quis.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;answers&quot;: [
                {
                    &quot;id&quot;: 1584,
                    &quot;question_id&quot;: 317,
                    &quot;answer&quot;: &quot;Aspernatur dolor quisquam.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1581,
                    &quot;question_id&quot;: 317,
                    &quot;answer&quot;: &quot;In non.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1583,
                    &quot;question_id&quot;: 317,
                    &quot;answer&quot;: &quot;Eveniet ea.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1582,
                    &quot;question_id&quot;: 317,
                    &quot;answer&quot;: &quot;Laborum aut.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1585,
                    &quot;question_id&quot;: 317,
                    &quot;answer&quot;: &quot;Tempore non et.&quot;,
                    &quot;is_true&quot;: true,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:41.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 318,
            &quot;quiz_id&quot;: 16,
            &quot;question&quot;: &quot;Aspernatur culpa sint officia est rerum facilis nulla.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;answers&quot;: [
                {
                    &quot;id&quot;: 1588,
                    &quot;question_id&quot;: 318,
                    &quot;answer&quot;: &quot;Eum qui.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1587,
                    &quot;question_id&quot;: 318,
                    &quot;answer&quot;: &quot;Nisi aut.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1590,
                    &quot;question_id&quot;: 318,
                    &quot;answer&quot;: &quot;Voluptatem placeat.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1586,
                    &quot;question_id&quot;: 318,
                    &quot;answer&quot;: &quot;Est voluptatem.&quot;,
                    &quot;is_true&quot;: true,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:41.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1589,
                    &quot;question_id&quot;: 318,
                    &quot;answer&quot;: &quot;Neque et deserunt.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 310,
            &quot;quiz_id&quot;: 16,
            &quot;question&quot;: &quot;Animi adipisci libero nihil veritatis reprehenderit et qui praesentium suscipit nihil ad error.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;answers&quot;: [
                {
                    &quot;id&quot;: 1546,
                    &quot;question_id&quot;: 310,
                    &quot;answer&quot;: &quot;Quisquam possimus.&quot;,
                    &quot;is_true&quot;: true,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:41.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1550,
                    &quot;question_id&quot;: 310,
                    &quot;answer&quot;: &quot;Qui aperiam.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1547,
                    &quot;question_id&quot;: 310,
                    &quot;answer&quot;: &quot;Sint quae ipsa.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1548,
                    &quot;question_id&quot;: 310,
                    &quot;answer&quot;: &quot;Voluptate harum.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1549,
                    &quot;question_id&quot;: 310,
                    &quot;answer&quot;: &quot;Fuga accusantium earum.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 316,
            &quot;quiz_id&quot;: 16,
            &quot;question&quot;: &quot;Quia doloremque voluptates adipisci ad rerum quia odio aut.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;answers&quot;: [
                {
                    &quot;id&quot;: 1580,
                    &quot;question_id&quot;: 316,
                    &quot;answer&quot;: &quot;Ea exercitationem.&quot;,
                    &quot;is_true&quot;: true,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:41.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1578,
                    &quot;question_id&quot;: 316,
                    &quot;answer&quot;: &quot;Numquam et laudantium.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1577,
                    &quot;question_id&quot;: 316,
                    &quot;answer&quot;: &quot;Temporibus ducimus.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1576,
                    &quot;question_id&quot;: 316,
                    &quot;answer&quot;: &quot;Est dicta.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1579,
                    &quot;question_id&quot;: 316,
                    &quot;answer&quot;: &quot;Odit aut.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 314,
            &quot;quiz_id&quot;: 16,
            &quot;question&quot;: &quot;Et et expedita sit aspernatur blanditiis commodi nam ut veritatis alias reprehenderit dolor voluptas.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;answers&quot;: [
                {
                    &quot;id&quot;: 1566,
                    &quot;question_id&quot;: 314,
                    &quot;answer&quot;: &quot;Quia dolores omnis.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1568,
                    &quot;question_id&quot;: 314,
                    &quot;answer&quot;: &quot;Molestiae vel vitae.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1569,
                    &quot;question_id&quot;: 314,
                    &quot;answer&quot;: &quot;Dolores soluta.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1567,
                    &quot;question_id&quot;: 314,
                    &quot;answer&quot;: &quot;Deleniti ducimus consequatur.&quot;,
                    &quot;is_true&quot;: true,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:41.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1570,
                    &quot;question_id&quot;: 314,
                    &quot;answer&quot;: &quot;Ut illo qui.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 306,
            &quot;quiz_id&quot;: 16,
            &quot;question&quot;: &quot;Quia maiores deleniti ut non velit ipsa ut temporibus velit est odio nisi aut voluptas temporibus aut.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;answers&quot;: [
                {
                    &quot;id&quot;: 1529,
                    &quot;question_id&quot;: 306,
                    &quot;answer&quot;: &quot;Quibusdam fuga.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1526,
                    &quot;question_id&quot;: 306,
                    &quot;answer&quot;: &quot;Dignissimos magnam voluptatem.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1528,
                    &quot;question_id&quot;: 306,
                    &quot;answer&quot;: &quot;Aperiam cumque quo.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1527,
                    &quot;question_id&quot;: 306,
                    &quot;answer&quot;: &quot;Aliquid nemo.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1530,
                    &quot;question_id&quot;: 306,
                    &quot;answer&quot;: &quot;Impedit ex.&quot;,
                    &quot;is_true&quot;: true,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:41.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 315,
            &quot;quiz_id&quot;: 16,
            &quot;question&quot;: &quot;Dolore rerum nemo qui maxime exercitationem necessitatibus quasi.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;answers&quot;: [
                {
                    &quot;id&quot;: 1573,
                    &quot;question_id&quot;: 315,
                    &quot;answer&quot;: &quot;Sint sed accusamus.&quot;,
                    &quot;is_true&quot;: true,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:41.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1575,
                    &quot;question_id&quot;: 315,
                    &quot;answer&quot;: &quot;Fuga est.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1574,
                    &quot;question_id&quot;: 315,
                    &quot;answer&quot;: &quot;Omnis beatae enim.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1571,
                    &quot;question_id&quot;: 315,
                    &quot;answer&quot;: &quot;Impedit et.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1572,
                    &quot;question_id&quot;: 315,
                    &quot;answer&quot;: &quot;Itaque laboriosam.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 311,
            &quot;quiz_id&quot;: 16,
            &quot;question&quot;: &quot;Eius eveniet corrupti qui eaque est omnis corporis deserunt est quibusdam omnis unde aperiam.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;answers&quot;: [
                {
                    &quot;id&quot;: 1553,
                    &quot;question_id&quot;: 311,
                    &quot;answer&quot;: &quot;Eum nobis voluptatem.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1555,
                    &quot;question_id&quot;: 311,
                    &quot;answer&quot;: &quot;Consequatur id blanditiis.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1551,
                    &quot;question_id&quot;: 311,
                    &quot;answer&quot;: &quot;A dignissimos.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1552,
                    &quot;question_id&quot;: 311,
                    &quot;answer&quot;: &quot;Eos velit hic.&quot;,
                    &quot;is_true&quot;: true,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:41.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1554,
                    &quot;question_id&quot;: 311,
                    &quot;answer&quot;: &quot;Hic ex ut.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 319,
            &quot;quiz_id&quot;: 16,
            &quot;question&quot;: &quot;Ipsum eligendi hic distinctio illo sit quasi nihil.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;answers&quot;: [
                {
                    &quot;id&quot;: 1593,
                    &quot;question_id&quot;: 319,
                    &quot;answer&quot;: &quot;Sed aliquam aut.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1594,
                    &quot;question_id&quot;: 319,
                    &quot;answer&quot;: &quot;Delectus voluptatibus.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1595,
                    &quot;question_id&quot;: 319,
                    &quot;answer&quot;: &quot;Odio ut quos.&quot;,
                    &quot;is_true&quot;: true,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:41.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1591,
                    &quot;question_id&quot;: 319,
                    &quot;answer&quot;: &quot;Quia rerum molestiae.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1592,
                    &quot;question_id&quot;: 319,
                    &quot;answer&quot;: &quot;Ut aliquam.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 307,
            &quot;quiz_id&quot;: 16,
            &quot;question&quot;: &quot;Inventore facere iure qui cum eius sed corrupti molestias exercitationem.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;answers&quot;: [
                {
                    &quot;id&quot;: 1533,
                    &quot;question_id&quot;: 307,
                    &quot;answer&quot;: &quot;Aut quos.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1535,
                    &quot;question_id&quot;: 307,
                    &quot;answer&quot;: &quot;Aut hic.&quot;,
                    &quot;is_true&quot;: true,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:41.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1532,
                    &quot;question_id&quot;: 307,
                    &quot;answer&quot;: &quot;Nihil odit.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1534,
                    &quot;question_id&quot;: 307,
                    &quot;answer&quot;: &quot;Distinctio laboriosam.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1531,
                    &quot;question_id&quot;: 307,
                    &quot;answer&quot;: &quot;Rerum veritatis aperiam.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 312,
            &quot;quiz_id&quot;: 16,
            &quot;question&quot;: &quot;Veritatis molestiae odit eum aut ut ut magnam et dolor tempore illum saepe omnis.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;answers&quot;: [
                {
                    &quot;id&quot;: 1556,
                    &quot;question_id&quot;: 312,
                    &quot;answer&quot;: &quot;Aut repellendus.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1559,
                    &quot;question_id&quot;: 312,
                    &quot;answer&quot;: &quot;Dolores veritatis.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1558,
                    &quot;question_id&quot;: 312,
                    &quot;answer&quot;: &quot;Asperiores nihil praesentium.&quot;,
                    &quot;is_true&quot;: true,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:41.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1560,
                    &quot;question_id&quot;: 312,
                    &quot;answer&quot;: &quot;Possimus perferendis.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1557,
                    &quot;question_id&quot;: 312,
                    &quot;answer&quot;: &quot;Ut facilis.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 305,
            &quot;quiz_id&quot;: 16,
            &quot;question&quot;: &quot;Fuga suscipit exercitationem omnis rerum ut est velit quae sed laudantium quidem et est et.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;answers&quot;: [
                {
                    &quot;id&quot;: 1522,
                    &quot;question_id&quot;: 305,
                    &quot;answer&quot;: &quot;Distinctio aliquam.&quot;,
                    &quot;is_true&quot;: true,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:41.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1521,
                    &quot;question_id&quot;: 305,
                    &quot;answer&quot;: &quot;Quia voluptatem et.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1525,
                    &quot;question_id&quot;: 305,
                    &quot;answer&quot;: &quot;Eligendi quia quo.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1524,
                    &quot;question_id&quot;: 305,
                    &quot;answer&quot;: &quot;Omnis et.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1523,
                    &quot;question_id&quot;: 305,
                    &quot;answer&quot;: &quot;Praesentium unde nobis.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 304,
            &quot;quiz_id&quot;: 16,
            &quot;question&quot;: &quot;Dolorem esse occaecati ut nobis et nam repellat ut.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;answers&quot;: [
                {
                    &quot;id&quot;: 1520,
                    &quot;question_id&quot;: 304,
                    &quot;answer&quot;: &quot;Eos necessitatibus et.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1516,
                    &quot;question_id&quot;: 304,
                    &quot;answer&quot;: &quot;Molestiae et.&quot;,
                    &quot;is_true&quot;: true,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:41.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1518,
                    &quot;question_id&quot;: 304,
                    &quot;answer&quot;: &quot;Suscipit ea.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1517,
                    &quot;question_id&quot;: 304,
                    &quot;answer&quot;: &quot;Reiciendis officiis sapiente.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1519,
                    &quot;question_id&quot;: 304,
                    &quot;answer&quot;: &quot;Aspernatur laboriosam dolor.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 302,
            &quot;quiz_id&quot;: 16,
            &quot;question&quot;: &quot;Rerum velit debitis assumenda quia rem quia quae voluptatem dolorum cupiditate magnam et sed.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;answers&quot;: [
                {
                    &quot;id&quot;: 1510,
                    &quot;question_id&quot;: 302,
                    &quot;answer&quot;: &quot;Officiis nobis.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1508,
                    &quot;question_id&quot;: 302,
                    &quot;answer&quot;: &quot;Aut laboriosam.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1506,
                    &quot;question_id&quot;: 302,
                    &quot;answer&quot;: &quot;Et autem non.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1509,
                    &quot;question_id&quot;: 302,
                    &quot;answer&quot;: &quot;Enim provident.&quot;,
                    &quot;is_true&quot;: true,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:41.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1507,
                    &quot;question_id&quot;: 302,
                    &quot;answer&quot;: &quot;Possimus laboriosam.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 309,
            &quot;quiz_id&quot;: 16,
            &quot;question&quot;: &quot;Sit neque esse ratione rerum voluptatum et earum nesciunt labore.&quot;,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
            &quot;answers&quot;: [
                {
                    &quot;id&quot;: 1545,
                    &quot;question_id&quot;: 309,
                    &quot;answer&quot;: &quot;Sunt perspiciatis.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1543,
                    &quot;question_id&quot;: 309,
                    &quot;answer&quot;: &quot;Necessitatibus soluta enim.&quot;,
                    &quot;is_true&quot;: true,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:41.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1544,
                    &quot;question_id&quot;: 309,
                    &quot;answer&quot;: &quot;Itaque perferendis harum.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1541,
                    &quot;question_id&quot;: 309,
                    &quot;answer&quot;: &quot;Aperiam adipisci architecto.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                },
                {
                    &quot;id&quot;: 1542,
                    &quot;question_id&quot;: 309,
                    &quot;answer&quot;: &quot;A illum repellat.&quot;,
                    &quot;is_true&quot;: false,
                    &quot;created_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-05-09T00:54:11.000000Z&quot;
                }
            ]
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-getQuizById--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-getQuizById--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-getQuizById--id-"></code></pre>
</span>
<span id="execution-error-GETapi-getQuizById--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-getQuizById--id-"></code></pre>
</span>
<form id="form-GETapi-getQuizById--id-" data-method="GET"
      data-path="api/getQuizById/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-getQuizById--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-getQuizById--id-"
                    onclick="tryItOut('GETapi-getQuizById--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-getQuizById--id-"
                    onclick="cancelTryOut('GETapi-getQuizById--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-getQuizById--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/getQuizById/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-getQuizById--id-"
               value="16"
               data-component="url" hidden>
    <br>
<p>The ID of the quiz</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-getQuizById--id-"
               value="9"
               data-component="body" hidden>
    <br>
<p>The ID of the quiz</p>
        </p>
                <p>
            <b><code>with_answers</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETapi-getQuizById--id-" hidden>
            <input type="radio" name="with_answers"
                   value="true"
                   data-endpoint="GETapi-getQuizById--id-"
                   data-component="body"
            >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-getQuizById--id-" hidden>
            <input type="radio" name="with_answers"
                   value="false"
                   data-endpoint="GETapi-getQuizById--id-"
                   data-component="body"
            >
            <code>false</code>
        </label>
    <br>

        </p>
                <p>
            <b><code>random_questions</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETapi-getQuizById--id-" hidden>
            <input type="radio" name="random_questions"
                   value="true"
                   data-endpoint="GETapi-getQuizById--id-"
                   data-component="body"
            >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-getQuizById--id-" hidden>
            <input type="radio" name="random_questions"
                   value="false"
                   data-endpoint="GETapi-getQuizById--id-"
                   data-component="body"
            >
            <code>false</code>
        </label>
    <br>

        </p>
                <p>
            <b><code>random_answers</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETapi-getQuizById--id-" hidden>
            <input type="radio" name="random_answers"
                   value="true"
                   data-endpoint="GETapi-getQuizById--id-"
                   data-component="body"
            >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-getQuizById--id-" hidden>
            <input type="radio" name="random_answers"
                   value="false"
                   data-endpoint="GETapi-getQuizById--id-"
                   data-component="body"
            >
            <code>false</code>
        </label>
    <br>

        </p>
        </form>

            <h2 id="quiz-endpoints-GETapi-getQuestionById--id-">Get Question by Id</h2>

<p>
</p>



<span id="example-requests-GETapi-getQuestionById--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://quizlaravel.test/api/getQuestionById/14" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"id\": 7,
    \"with_answers\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://quizlaravel.test/api/getQuestionById/14"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 7,
    "with_answers": true
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-getQuestionById--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;id&quot;: 14,
    &quot;quiz_id&quot;: 1,
    &quot;question&quot;: &quot;Modi dignissimos esse voluptas vero quibusdam architecto aut porro officia.&quot;,
    &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
    &quot;answers&quot;: [
        {
            &quot;id&quot;: 66,
            &quot;question_id&quot;: 14,
            &quot;answer&quot;: &quot;Et ex.&quot;,
            &quot;is_true&quot;: false,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        {
            &quot;id&quot;: 67,
            &quot;question_id&quot;: 14,
            &quot;answer&quot;: &quot;Omnis voluptates ducimus.&quot;,
            &quot;is_true&quot;: false,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        {
            &quot;id&quot;: 68,
            &quot;question_id&quot;: 14,
            &quot;answer&quot;: &quot;Eos aut voluptas.&quot;,
            &quot;is_true&quot;: false,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        {
            &quot;id&quot;: 69,
            &quot;question_id&quot;: 14,
            &quot;answer&quot;: &quot;Rerum expedita tempora.&quot;,
            &quot;is_true&quot;: false,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;
        },
        {
            &quot;id&quot;: 70,
            &quot;question_id&quot;: 14,
            &quot;answer&quot;: &quot;Ut totam occaecati.&quot;,
            &quot;is_true&quot;: true,
            &quot;created_at&quot;: &quot;2022-05-09T00:54:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-05-09T00:54:40.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-getQuestionById--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-getQuestionById--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-getQuestionById--id-"></code></pre>
</span>
<span id="execution-error-GETapi-getQuestionById--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-getQuestionById--id-"></code></pre>
</span>
<form id="form-GETapi-getQuestionById--id-" data-method="GET"
      data-path="api/getQuestionById/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-getQuestionById--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-getQuestionById--id-"
                    onclick="tryItOut('GETapi-getQuestionById--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-getQuestionById--id-"
                    onclick="cancelTryOut('GETapi-getQuestionById--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-getQuestionById--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/getQuestionById/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-getQuestionById--id-"
               value="14"
               data-component="url" hidden>
    <br>
<p>The ID of the question</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-getQuestionById--id-"
               value="7"
               data-component="body" hidden>
    <br>
<p>The ID of the question</p>
        </p>
                <p>
            <b><code>with_answers</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETapi-getQuestionById--id-" hidden>
            <input type="radio" name="with_answers"
                   value="true"
                   data-endpoint="GETapi-getQuestionById--id-"
                   data-component="body"
            >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-getQuestionById--id-" hidden>
            <input type="radio" name="with_answers"
                   value="false"
                   data-endpoint="GETapi-getQuestionById--id-"
                   data-component="body"
            >
            <code>false</code>
        </label>
    <br>

        </p>
        </form>

    

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
