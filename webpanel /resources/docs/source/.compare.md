---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://service2020.axum/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_7bb98b04700f3dbd85a9fddbc17fe0ba -->
## translations/view/{groupKey?}
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/translations/view/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/translations/view/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET translations/view/{groupKey?}`


<!-- END_7bb98b04700f3dbd85a9fddbc17fe0ba -->

<!-- START_7ac42e4329e6d86622c56c756f8517cc -->
## translations/{groupKey?}
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/translations/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/translations/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET translations/{groupKey?}`


<!-- END_7ac42e4329e6d86622c56c756f8517cc -->

<!-- START_0168ead45c7cb658b56acdd51f089f62 -->
## translations/add/{groupKey}
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/translations/add/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/translations/add/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST translations/add/{groupKey}`


<!-- END_0168ead45c7cb658b56acdd51f089f62 -->

<!-- START_03a7c19ffea6afece61d01e6ec9f2abe -->
## translations/edit/{groupKey}
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/translations/edit/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/translations/edit/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST translations/edit/{groupKey}`


<!-- END_03a7c19ffea6afece61d01e6ec9f2abe -->

<!-- START_c2402a9994d359c70539d10c36926a3a -->
## translations/groups/add
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/translations/groups/add" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/translations/groups/add"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST translations/groups/add`


<!-- END_c2402a9994d359c70539d10c36926a3a -->

<!-- START_95267c9265896de0058370e9cc5fab1a -->
## translations/delete/{groupKey}/{translationKey}
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/translations/delete/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/translations/delete/1/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST translations/delete/{groupKey}/{translationKey}`


<!-- END_95267c9265896de0058370e9cc5fab1a -->

<!-- START_b15a96b2f7f6064670414f215ffc1642 -->
## translations/import
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/translations/import" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/translations/import"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST translations/import`


<!-- END_b15a96b2f7f6064670414f215ffc1642 -->

<!-- START_e091e06c1076126c1c9fa2323a3eb8fe -->
## translations/find
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/translations/find" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/translations/find"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST translations/find`


<!-- END_e091e06c1076126c1c9fa2323a3eb8fe -->

<!-- START_d3025c4c1e397d883b218e2d9d3159ac -->
## translations/locales/add
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/translations/locales/add" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/translations/locales/add"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST translations/locales/add`


<!-- END_d3025c4c1e397d883b218e2d9d3159ac -->

<!-- START_ddf8fd8fa949df46487ae802f8788662 -->
## translations/locales/remove
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/translations/locales/remove" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/translations/locales/remove"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST translations/locales/remove`


<!-- END_ddf8fd8fa949df46487ae802f8788662 -->

<!-- START_33164cb4a403197cc3fcbb16e7c6c006 -->
## translations/publish/{groupKey}
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/translations/publish/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/translations/publish/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST translations/publish/{groupKey}`


<!-- END_33164cb4a403197cc3fcbb16e7c6c006 -->

<!-- START_61fd9a785995208b76444cc60b3109da -->
## translations/translate-missing
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/translations/translate-missing" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/translations/translate-missing"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST translations/translate-missing`


<!-- END_61fd9a785995208b76444cc60b3109da -->

<!-- START_327f0c0757a5a902e94cf0500bcb12a9 -->
## Got to payment.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/tzsk/payment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/tzsk/payment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET tzsk/payment`


<!-- END_327f0c0757a5a902e94cf0500bcb12a9 -->

<!-- START_f3d0b0b85ced313c203fa6a9628b1377 -->
## After payment it will return here.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/tzsk/payment/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/tzsk/payment/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST tzsk/payment/{status}`


<!-- END_f3d0b0b85ced313c203fa6a9628b1377 -->

<!-- START_0c068b4037fb2e47e71bd44bd36e3e2a -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET oauth/authorize`


<!-- END_0c068b4037fb2e47e71bd44bd36e3e2a -->

<!-- START_e48cc6a0b45dd21b7076ab2c03908687 -->
## Approve the authorization request.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/authorize`


<!-- END_e48cc6a0b45dd21b7076ab2c03908687 -->

<!-- START_de5d7581ef1275fce2a229b6b6eaad9c -->
## Deny the authorization request.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/authorize`


<!-- END_de5d7581ef1275fce2a229b6b6eaad9c -->

<!-- START_a09d20357336aa979ecd8e3972ac9168 -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/oauth/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/oauth/token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/token`


<!-- END_a09d20357336aa979ecd8e3972ac9168 -->

<!-- START_d6a56149547e03307199e39e03e12d1c -->
## Get all of the authorized tokens for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/oauth/tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/oauth/tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/tokens`


<!-- END_d6a56149547e03307199e39e03e12d1c -->

<!-- START_a9a802c25737cca5324125e5f60b72a5 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/oauth/tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/oauth/tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/tokens/{token_id}`


<!-- END_a9a802c25737cca5324125e5f60b72a5 -->

<!-- START_abe905e69f5d002aa7d26f433676d623 -->
## Get a fresh transient token cookie for the authenticated user.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/oauth/token/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/oauth/token/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/token/refresh`


<!-- END_abe905e69f5d002aa7d26f433676d623 -->

<!-- START_babcfe12d87b8708f5985e9d39ba8f2c -->
## Get all of the clients for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/clients`


<!-- END_babcfe12d87b8708f5985e9d39ba8f2c -->

<!-- START_9eabf8d6e4ab449c24c503fcb42fba82 -->
## Store a new client.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/clients`


<!-- END_9eabf8d6e4ab449c24c503fcb42fba82 -->

<!-- START_784aec390a455073fc7464335c1defa1 -->
## Update the given client.

> Example request:

```bash
curl -X PUT \
    "http://service2020.axum/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT oauth/clients/{client_id}`


<!-- END_784aec390a455073fc7464335c1defa1 -->

<!-- START_1f65a511dd86ba0541d7ba13ca57e364 -->
## Delete the given client.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/clients/{client_id}`


<!-- END_1f65a511dd86ba0541d7ba13ca57e364 -->

<!-- START_9e281bd3a1eb1d9eb63190c8effb607c -->
## Get all of the available scopes for the application.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/oauth/scopes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/oauth/scopes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/scopes`


<!-- END_9e281bd3a1eb1d9eb63190c8effb607c -->

<!-- START_9b2a7699ce6214a79e0fd8107f8b1c9e -->
## Get all of the personal access tokens for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/personal-access-tokens`


<!-- END_9b2a7699ce6214a79e0fd8107f8b1c9e -->

<!-- START_a8dd9c0a5583742e671711f9bb3ee406 -->
## Create a new personal access token for the user.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/personal-access-tokens`


<!-- END_a8dd9c0a5583742e671711f9bb3ee406 -->

<!-- START_bae65df80fd9d72a01439241a9ea20d0 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/oauth/personal-access-tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/oauth/personal-access-tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/personal-access-tokens/{token_id}`


<!-- END_bae65df80fd9d72a01439241a9ea20d0 -->

<!-- START_a311d2b3f58418f283c14e8ce61e16fe -->
## api/user/settings
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/user/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "serviceTypes": [
        {
            "id": 1,
            "name": "Electrician"
        },
        {
            "id": 2,
            "name": "Plumbing"
        },
        {
            "id": 3,
            "name": "Carpenter"
        },
        {
            "id": 4,
            "name": "Mechanic"
        }
    ],
    "referral": {
        "referral": "0",
        "count": "30",
        "amount": "30",
        "ride_otp": 0,
        "ride_toll": 0
    }
}
```

### HTTP Request
`GET api/user/settings`


<!-- END_a311d2b3f58418f283c14e8ce61e16fe -->

<!-- START_c69699fc09cab55e475c22bf309614a6 -->
## Verifica a disponiblidade do Email e Telefone para o usuário

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/verify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/verify"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/verify`


<!-- END_c69699fc09cab55e475c22bf309614a6 -->

<!-- START_3fdc0a1dedf3f9f124f91e2b7bdf0131 -->
## api/user/checkemail
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/checkemail" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/checkemail"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/checkemail`


<!-- END_3fdc0a1dedf3f9f124f91e2b7bdf0131 -->

<!-- START_c08ea567c89e94583295f8921844931b -->
## Realiza autenticação do usuário

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/oauth/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/oauth/token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/oauth/token`


<!-- END_c08ea567c89e94583295f8921844931b -->

<!-- START_744e5b50e2aa5bc52ac2ab4757a7d0aa -->
## Realiza cadastro do usuário no sistema.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/signup" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/signup"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/signup`


<!-- END_744e5b50e2aa5bc52ac2ab4757a7d0aa -->

<!-- START_ce7af384a8eb198ec28d752586f4ff17 -->
## Efetua logout da aplicação

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/logout`


<!-- END_ce7af384a8eb198ec28d752586f4ff17 -->

<!-- START_c344212fb4837c3acacf5b3ca87677fc -->
## api/user/checkapi
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/user/checkapi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/checkapi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "sucess": true
}
```

### HTTP Request
`GET api/user/checkapi`


<!-- END_c344212fb4837c3acacf5b3ca87677fc -->

<!-- START_adb1ec5cf833c9105334bc25af5d2694 -->
## api/user/checkversion
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/checkversion" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/checkversion"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/checkversion`


<!-- END_adb1ec5cf833c9105334bc25af5d2694 -->

<!-- START_bc1c010a4ded45083d4cb233ec99dc3b -->
## Show the application dashboard.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/auth/facebook" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/auth/facebook"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/auth/facebook`


<!-- END_bc1c010a4ded45083d4cb233ec99dc3b -->

<!-- START_898f4dcfeddaebc708f37e244962bd96 -->
## Show the application dashboard.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/auth/google" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/auth/google"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/auth/google`


<!-- END_898f4dcfeddaebc708f37e244962bd96 -->

<!-- START_9dac0740f5fcc2d88cf68ffbb1dd80d4 -->
## Forgot Password.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/forgot/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/forgot/password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/forgot/password`


<!-- END_9dac0740f5fcc2d88cf68ffbb1dd80d4 -->

<!-- START_f643de0a177ba4b4397f6a964ccdf267 -->
## Reset Password.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/reset/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/reset/password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/reset/password`


<!-- END_f643de0a177ba4b4397f6a964ccdf267 -->

<!-- START_6cc7af8e9b8dfc925863030403e8d169 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/user/estimated/fare_without_auth" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/estimated/fare_without_auth"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "s_latitude": [
            "Source address required"
        ],
        "d_latitude": [
            "Destination address required"
        ],
        "service_type": [
            "The service type field is required."
        ]
    }
}
```

### HTTP Request
`GET api/user/estimated/fare_without_auth`


<!-- END_6cc7af8e9b8dfc925863030403e8d169 -->

<!-- START_eb9a2fdc735f3672bfd36a8103af9829 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/user/estimated/fare" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/estimated/fare"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/user/estimated/fare`


<!-- END_eb9a2fdc735f3672bfd36a8103af9829 -->

<!-- START_5b5aa0a1cd12c8828877286a36516f89 -->
## Altera senha do usuário

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/change/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/change/password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/change/password`


<!-- END_5b5aa0a1cd12c8828877286a36516f89 -->

<!-- START_c715a1bdbdb4675e778145f5eabab9da -->
## Atualiza informações de localização

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/update/location" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/update/location"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/update/location`


<!-- END_c715a1bdbdb4675e778145f5eabab9da -->

<!-- START_754edea6ba1fdcec45bb8fc9af99df27 -->
## Atualiza informações de idioma

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/update/language" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/update/language"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/update/language`


<!-- END_754edea6ba1fdcec45bb8fc9af99df27 -->

<!-- START_36523dc4fded3aa75e2f0ca98bef5776 -->
## Disponibiliza informações de detalhes do usuário

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/user/details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/details"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/user/details`


<!-- END_36523dc4fded3aa75e2f0ca98bef5776 -->

<!-- START_5f1fe163c0b063c56eb53dcadd6358ab -->
## Show the application dashboard.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/update/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/update/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/update/profile`


<!-- END_5f1fe163c0b063c56eb53dcadd6358ab -->

<!-- START_b39e8adfc9244375c9ac7fcbffcec2ea -->
## Atualiza informações de ligação

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/update/details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/update/details"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/update/details`


<!-- END_b39e8adfc9244375c9ac7fcbffcec2ea -->

<!-- START_f0e4dc08271489b2aec239c0dae02b69 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/user/services" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/services"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/user/services`


<!-- END_f0e4dc08271489b2aec239c0dae02b69 -->

<!-- START_c37f098b07ec66bf4c9dd5bfdaacaf6d -->
## Show the application dashboard.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/rate/provider" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/rate/provider"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/rate/provider`


<!-- END_c37f098b07ec66bf4c9dd5bfdaacaf6d -->

<!-- START_b4b9dcf8772de2b5a8e0aed1613037db -->
## Show the application dashboard.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/send/request" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/send/request"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/send/request`


<!-- END_b4b9dcf8772de2b5a8e0aed1613037db -->

<!-- START_c87e020c77f85a9c44d8466de2433367 -->
## Show the application dashboard.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/cancel/request" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/cancel/request"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/cancel/request`


<!-- END_c87e020c77f85a9c44d8466de2433367 -->

<!-- START_5a4bd58a07b97470ef1aba5b9ad05c30 -->
## Show the request status check.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/user/request/check" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/request/check"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/user/request/check`


<!-- END_5a4bd58a07b97470ef1aba5b9ad05c30 -->

<!-- START_5abd1c17f34fbc1a373dc605a847470e -->
## Show the nearby providers.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/user/show/providers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/show/providers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/user/show/providers`


<!-- END_5abd1c17f34fbc1a373dc605a847470e -->

<!-- START_a123cdb948d9fc79fe6c5b71bffd1c15 -->
## Show the application dashboard.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/update/request" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/update/request"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/update/request`


<!-- END_a123cdb948d9fc79fe6c5b71bffd1c15 -->

<!-- START_7c863d0e4a4212523d30fb4c47c0d2e1 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/user/trips" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/trips"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/user/trips`


<!-- END_7c863d0e4a4212523d30fb4c47c0d2e1 -->

<!-- START_b8f48086c22951c2f91768d29199d56e -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/user/upcoming/trips" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/upcoming/trips"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/user/upcoming/trips`


<!-- END_b8f48086c22951c2f91768d29199d56e -->

<!-- START_1707c65db98e724cdcfbd4d2c988aa99 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/user/trip/details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/trip/details"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/user/trip/details`


<!-- END_1707c65db98e724cdcfbd4d2c988aa99 -->

<!-- START_3641885d80f59c882896657effb1982b -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/user/upcoming/trip/details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/upcoming/trip/details"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/user/upcoming/trip/details`


<!-- END_3641885d80f59c882896657effb1982b -->

<!-- START_67ee20e4474fed0dc60abf48a54aa1ac -->
## api/user/extend/trip
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/extend/trip" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/extend/trip"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/extend/trip`


<!-- END_67ee20e4474fed0dc60abf48a54aa1ac -->

<!-- START_a1122e700a2e1bc9aa637e126ac593c3 -->
## payment for user.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/payment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/payment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/payment`


<!-- END_a1122e700a2e1bc9aa637e126ac593c3 -->

<!-- START_fce00bd4e4ccd1dd75b17fa0b7b5e5e2 -->
## add wallet money for user.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/add/money" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/add/money"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/add/money`


<!-- END_fce00bd4e4ccd1dd75b17fa0b7b5e5e2 -->

<!-- START_5d3abe344a0fdfae971abe45a50bea28 -->
## api/user/braintree/token
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/user/braintree/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/braintree/token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/user/braintree/token`


<!-- END_5d3abe344a0fdfae971abe45a50bea28 -->

<!-- START_b3d9cc71985769b29b3dc291c9c6a4ab -->
## api/user/payu/response
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/payu/response" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/payu/response"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/payu/response`


<!-- END_b3d9cc71985769b29b3dc291c9c6a4ab -->

<!-- START_b17ebfc03b48927eb944f4c6a57633db -->
## api/user/payu/failure
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/payu/failure" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/payu/failure"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/payu/failure`


<!-- END_b17ebfc03b48927eb944f4c6a57633db -->

<!-- START_ee208322f17f9d423a6bfb4ab7efdd5f -->
## api/user/paytm/response
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/paytm/response" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/paytm/response"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/paytm/response`


<!-- END_ee208322f17f9d423a6bfb4ab7efdd5f -->

<!-- START_9fd06c59ae80d8528ffac4745445eaca -->
## api/user/payment/response
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/user/payment/response" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/payment/response"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/user/payment/response`


<!-- END_9fd06c59ae80d8528ffac4745445eaca -->

<!-- START_f1aee48d85653d0cbc2ad290b04aaa44 -->
## help Details.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/user/help" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/help"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/user/help`


<!-- END_f1aee48d85653d0cbc2ad290b04aaa44 -->

<!-- START_4e57e78c3518b61b87ef86cb5c158096 -->
## add promo code.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/user/promocodes_list" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/promocodes_list"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/user/promocodes_list`


<!-- END_4e57e78c3518b61b87ef86cb5c158096 -->

<!-- START_31bf68717053f8ce6307728349ce2171 -->
## get all promo code.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/user/promocodes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/promocodes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/user/promocodes`


<!-- END_31bf68717053f8ce6307728349ce2171 -->

<!-- START_5068810a73ceccdb37d25ba45c676322 -->
## api/user/promocode/add
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/promocode/add" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/promocode/add"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/promocode/add`


<!-- END_5068810a73ceccdb37d25ba45c676322 -->

<!-- START_f5e1fd25400f093ca30000810dfb808f -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/user/card" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/card"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/user/card`


<!-- END_f5e1fd25400f093ca30000810dfb808f -->

<!-- START_7c5ecc62d7475e33f5a92d4a6717dcb5 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/user/card/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/card/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/user/card/create`


<!-- END_7c5ecc62d7475e33f5a92d4a6717dcb5 -->

<!-- START_ab25faa47ada60c02d075a260acde945 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/card" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/card"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/card`


<!-- END_ab25faa47ada60c02d075a260acde945 -->

<!-- START_7bb9e4867e763bc1d0895d2c6bfe8c94 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/user/card/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/card/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/user/card/{card}`


<!-- END_7bb9e4867e763bc1d0895d2c6bfe8c94 -->

<!-- START_430095885728a891c1dd9758ef2e6b7f -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/user/card/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/card/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/user/card/{card}/edit`


<!-- END_430095885728a891c1dd9758ef2e6b7f -->

<!-- START_90d3098ae837caeebdbc4ca80b936a86 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://service2020.axum/api/user/card/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/card/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/user/card/{card}`

`PATCH api/user/card/{card}`


<!-- END_90d3098ae837caeebdbc4ca80b936a86 -->

<!-- START_c0ce4149549f04b6c1d9d7bd6004a5a5 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/api/user/card/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/card/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/user/card/{card}`


<!-- END_c0ce4149549f04b6c1d9d7bd6004a5a5 -->

<!-- START_c866092e2c6b792075677ac9c039c863 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/user/location" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/location"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/user/location`


<!-- END_c866092e2c6b792075677ac9c039c863 -->

<!-- START_49ee548678846589c96c2aa5b33d28ff -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/user/location/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/location/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/user/location/create`


<!-- END_49ee548678846589c96c2aa5b33d28ff -->

<!-- START_efdbc244f47edc54460b77c2835c30e0 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/location" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/location"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/location`


<!-- END_efdbc244f47edc54460b77c2835c30e0 -->

<!-- START_29f237b35d5b58924417c61694b1149c -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/user/location/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/location/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/user/location/{location}`


<!-- END_29f237b35d5b58924417c61694b1149c -->

<!-- START_58ceb02944de149ae2a8cc07f07bb570 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/user/location/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/location/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/user/location/{location}/edit`


<!-- END_58ceb02944de149ae2a8cc07f07bb570 -->

<!-- START_8424b7971eac924d99f1414ec3eca7b1 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://service2020.axum/api/user/location/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/location/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/user/location/{location}`

`PATCH api/user/location/{location}`


<!-- END_8424b7971eac924d99f1414ec3eca7b1 -->

<!-- START_ca042b2873ebf8adc476f5e99568183b -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/api/user/location/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/location/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/user/location/{location}`


<!-- END_ca042b2873ebf8adc476f5e99568183b -->

<!-- START_35c4a8eb93afb3ea727b6266f8b8eeca -->
## Show the wallet usage.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/user/wallet/passbook" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/wallet/passbook"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/user/wallet/passbook`


<!-- END_35c4a8eb93afb3ea727b6266f8b8eeca -->

<!-- START_0370179792bddf1736d2f20af6a10475 -->
## Show the promo usage.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/user/promo/passbook" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/promo/passbook"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/user/promo/passbook`


<!-- END_0370179792bddf1736d2f20af6a10475 -->

<!-- START_4991fe2e6b74f6d4ca957375de865b65 -->
## Show the application dashboard.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/test/push" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/test/push"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/test/push`


<!-- END_4991fe2e6b74f6d4ca957375de865b65 -->

<!-- START_27b97c7949247ba7d1a8f7057ed6dc0c -->
## Show the wallet usage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/chat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/chat"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/chat`


<!-- END_27b97c7949247ba7d1a8f7057ed6dc0c -->

<!-- START_7e12f6fb11b28f0ef5a9c58a0d72cc9c -->
## api/user/reasons
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/user/reasons" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/reasons"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/user/reasons`


<!-- END_7e12f6fb11b28f0ef5a9c58a0d72cc9c -->

<!-- START_213f7402a6988128914e811e04f85bc1 -->
## get notifications for respcted types

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/user/notifications/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/notifications/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/user/notifications/{type}`


<!-- END_213f7402a6988128914e811e04f85bc1 -->

<!-- START_6b6ade8ed0d2d2ac23e0f392011ad2e5 -->
## api/user/dispute-list
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/dispute-list" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/dispute-list"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/dispute-list`


<!-- END_6b6ade8ed0d2d2ac23e0f392011ad2e5 -->

<!-- START_cb8cd63ba1a885b2826c13a0cd9eec21 -->
## api/user/dispute
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/dispute" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/dispute"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/dispute`


<!-- END_cb8cd63ba1a885b2826c13a0cd9eec21 -->

<!-- START_59ede4de241b6ad4253ed2eac1616cb4 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/drop-item" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/drop-item"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/drop-item`


<!-- END_59ede4de241b6ad4253ed2eac1616cb4 -->

<!-- START_03777f1f51ca27cc6cec0d8783831db0 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PATCH \
    "http://service2020.axum/api/user/drop-item/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/drop-item/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PATCH api/user/drop-item/{id}`


<!-- END_03777f1f51ca27cc6cec0d8783831db0 -->

<!-- START_4e83fd9b460f7e0a1cec5b4c417d15c6 -->
## api/user/payment-log
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/payment-log" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/payment-log"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/payment-log`


<!-- END_4e83fd9b460f7e0a1cec5b4c417d15c6 -->

<!-- START_9860e6b9e29d1be50438174b8430f7b1 -->
## api/user/verify-credentials
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/verify-credentials" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/verify-credentials"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/verify-credentials`


<!-- END_9860e6b9e29d1be50438174b8430f7b1 -->

<!-- START_c9a54df39c0caaba1e5ae9499c2e0968 -->
## api/user/save-subscription/{id}
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/user/save-subscription/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/user/save-subscription/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/save-subscription/{id}`


<!-- END_c9a54df39c0caaba1e5ae9499c2e0968 -->

<!-- START_66e08d3cc8222573018fed49e121e96d -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET login`


<!-- END_66e08d3cc8222573018fed49e121e96d -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET register`


<!-- END_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->

<!-- START_d7aad7b5ac127700500280d511a3db01 -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST register`


<!-- END_d7aad7b5ac127700500280d511a3db01 -->

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset`


<!-- END_d72797bae6d0b1f3a341ebb1f8900441 -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_e1605a6e5ceee9d1aeb7729216635fd7 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/password/reset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset/{token}`


<!-- END_e1605a6e5ceee9d1aeb7729216635fd7 -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->

<!-- START_8e7e6cd46c5022f771033de1b984b211 -->
## auth/facebook
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/auth/facebook" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/auth/facebook"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET auth/facebook`


<!-- END_8e7e6cd46c5022f771033de1b984b211 -->

<!-- START_70803c7da19b77a68858a10cbec38fc1 -->
## auth/facebook/callback
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/auth/facebook/callback" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/auth/facebook/callback"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET auth/facebook/callback`


<!-- END_70803c7da19b77a68858a10cbec38fc1 -->

<!-- START_1717d6430f8c6e3d523951f926618843 -->
## auth/google
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/auth/google" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/auth/google"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET auth/google`


<!-- END_1717d6430f8c6e3d523951f926618843 -->

<!-- START_c486e6f74a596977c91767a176d200a0 -->
## auth/google/callback
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/auth/google/callback" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/auth/google/callback"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET auth/google/callback`


<!-- END_c486e6f74a596977c91767a176d200a0 -->

<!-- START_bbf68c10f0fe0c7ef1c0438e0b99dd29 -->
## account/kit
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/account/kit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/kit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST account/kit`


<!-- END_bbf68c10f0fe0c7ef1c0438e0b99dd29 -->

<!-- START_69f6f3c5658cf754c58ef0d4e7138464 -->
## provider/verify-credentials
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/provider/verify-credentials" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/verify-credentials"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST provider/verify-credentials`


<!-- END_69f6f3c5658cf754c58ef0d4e7138464 -->

<!-- START_119d8239e9aa691297896016ebc76979 -->
## user/verify-credentials
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/user/verify-credentials" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/user/verify-credentials"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST user/verify-credentials`


<!-- END_119d8239e9aa691297896016ebc76979 -->

<!-- START_47feae6d6dee63af7b823a46d100e5b4 -->
## provider/auth/facebook
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/provider/auth/facebook" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/auth/facebook"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET provider/auth/facebook`


<!-- END_47feae6d6dee63af7b823a46d100e5b4 -->

<!-- START_4d12cd37250c570a9c1f91743e6cda90 -->
## provider/auth/google
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/provider/auth/google" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/auth/google"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET provider/auth/google`


<!-- END_4d12cd37250c570a9c1f91743e6cda90 -->

<!-- START_13af55deee78e07569b9aa2cc9832294 -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/provider/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET provider/login`


<!-- END_13af55deee78e07569b9aa2cc9832294 -->

<!-- START_b8425b81ca88b55f09102553dd76fa5f -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/provider/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST provider/login`


<!-- END_b8425b81ca88b55f09102553dd76fa5f -->

<!-- START_25eabf64f86b1ba5a4f3103bfa349c81 -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/provider/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST provider/logout`


<!-- END_25eabf64f86b1ba5a4f3103bfa349c81 -->

<!-- START_0e68eae076cc6a6ea3f0f5d7e8ea05c6 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/provider/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET provider/register`


<!-- END_0e68eae076cc6a6ea3f0f5d7e8ea05c6 -->

<!-- START_1c3b179f816b3c0c1d99c3653b02ed94 -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/provider/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST provider/register`


<!-- END_1c3b179f816b3c0c1d99c3653b02ed94 -->

<!-- START_b2569473b5ed2e7378733cf106103f6f -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/provider/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST provider/password/email`


<!-- END_b2569473b5ed2e7378733cf106103f6f -->

<!-- START_6184fa18356e53953fec2d7c06a20deb -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/provider/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST provider/password/reset`


<!-- END_6184fa18356e53953fec2d7c06a20deb -->

<!-- START_00d14b9f6110002ffcc14b4671779d84 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/provider/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET provider/password/reset`


<!-- END_00d14b9f6110002ffcc14b4671779d84 -->

<!-- START_4eb293f0992430ac3695b20504f19caf -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/provider/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/password/reset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET provider/password/reset/{token}`


<!-- END_4eb293f0992430ac3695b20504f19caf -->

<!-- START_03a76d7b7a89853a08696bfe71bbbba7 -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/login`


<!-- END_03a76d7b7a89853a08696bfe71bbbba7 -->

<!-- START_fe5fe3a14f04e5648848f1a59ea3da82 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/login`


<!-- END_fe5fe3a14f04e5648848f1a59ea3da82 -->

<!-- START_d31bd86158f6a5a775c92ea5b5554af9 -->
## admin/logout
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/logout`


<!-- END_d31bd86158f6a5a775c92ea5b5554af9 -->

<!-- START_f611ae8378c7426b163ac3d140ded37c -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/password/email`


<!-- END_f611ae8378c7426b163ac3d140ded37c -->

<!-- START_d155055b87508acb9e934bcf9407b028 -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/password/reset`


<!-- END_d155055b87508acb9e934bcf9407b028 -->

<!-- START_583a6990174e55a2eb91791ae4776c83 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/password/reset`


<!-- END_583a6990174e55a2eb91791ae4776c83 -->

<!-- START_968312b0cceac43f210857c19898f766 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/password/reset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/password/reset/{token}`


<!-- END_968312b0cceac43f210857c19898f766 -->

<!-- START_95b59c46de2715dfebf3c272bbd6b9db -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/dispatcher/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/dispatcher/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET dispatcher/login`


<!-- END_95b59c46de2715dfebf3c272bbd6b9db -->

<!-- START_9c28d22ee31a6b71b2bf7a747032707d -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/dispatcher/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/dispatcher/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dispatcher/login`


<!-- END_9c28d22ee31a6b71b2bf7a747032707d -->

<!-- START_8ccafd7d5d1f6ed0df4c02e8a8c83928 -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/dispatcher/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/dispatcher/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dispatcher/logout`


<!-- END_8ccafd7d5d1f6ed0df4c02e8a8c83928 -->

<!-- START_52f6fd094e4a02e2ed94146700895a8d -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/dispatcher/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/dispatcher/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dispatcher/password/email`


<!-- END_52f6fd094e4a02e2ed94146700895a8d -->

<!-- START_335ef26d355008dfd6c97a2c282516a5 -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/dispatcher/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/dispatcher/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dispatcher/password/reset`


<!-- END_335ef26d355008dfd6c97a2c282516a5 -->

<!-- START_e7e7384413b84d3a7cf66757815e536b -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/dispatcher/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/dispatcher/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET dispatcher/password/reset`


<!-- END_e7e7384413b84d3a7cf66757815e536b -->

<!-- START_377b1e0234aa30273f9f678abd6f2f63 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/dispatcher/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/dispatcher/password/reset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET dispatcher/password/reset/{token}`


<!-- END_377b1e0234aa30273f9f678abd6f2f63 -->

<!-- START_8cdfc8b26b6efe767f22d84f1abfec61 -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET fleet/login`


<!-- END_8cdfc8b26b6efe767f22d84f1abfec61 -->

<!-- START_beec5cf12a9bfc40a54d8d641e760b94 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/fleet/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST fleet/login`


<!-- END_beec5cf12a9bfc40a54d8d641e760b94 -->

<!-- START_b6f1d028929790222d28e55a52fa7b41 -->
## fleet/logout
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/fleet/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST fleet/logout`


<!-- END_b6f1d028929790222d28e55a52fa7b41 -->

<!-- START_b85a9b3bae85124e271ccd689d3fbfc4 -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/fleet/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST fleet/password/email`


<!-- END_b85a9b3bae85124e271ccd689d3fbfc4 -->

<!-- START_25348df5f176426c6e69979a8e513e5d -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/fleet/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST fleet/password/reset`


<!-- END_25348df5f176426c6e69979a8e513e5d -->

<!-- START_0dc85ec5393c54d22e7d08aa09d53b34 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET fleet/password/reset`


<!-- END_0dc85ec5393c54d22e7d08aa09d53b34 -->

<!-- START_474059be609b362adace04511a252f26 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/password/reset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET fleet/password/reset/{token}`


<!-- END_474059be609b362adace04511a252f26 -->

<!-- START_794e99cd7fc097d6f651b572256c4055 -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/account/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET account/login`


<!-- END_794e99cd7fc097d6f651b572256c4055 -->

<!-- START_6801d7085c15dfd9c899d3ad60aac221 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/account/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST account/login`


<!-- END_6801d7085c15dfd9c899d3ad60aac221 -->

<!-- START_22cc6e2559c278e5b61465de4441135d -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/account/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST account/logout`


<!-- END_22cc6e2559c278e5b61465de4441135d -->

<!-- START_2ff3572e3596e093fd3d9974e2bd5956 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/account/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET account/register`


<!-- END_2ff3572e3596e093fd3d9974e2bd5956 -->

<!-- START_dfed92e40756668435c3d8a4fdbcb174 -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/account/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST account/register`


<!-- END_dfed92e40756668435c3d8a4fdbcb174 -->

<!-- START_7854acc1d49d6f737858d8b91daf391e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/account/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST account/password/email`


<!-- END_7854acc1d49d6f737858d8b91daf391e -->

<!-- START_0ebad622cf533b9f03b8b54a46032708 -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/account/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST account/password/reset`


<!-- END_0ebad622cf533b9f03b8b54a46032708 -->

<!-- START_a69777de77b6f2bef6755f5eaa9f288f -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/account/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET account/password/reset`


<!-- END_a69777de77b6f2bef6755f5eaa9f288f -->

<!-- START_1698a123f5626ee3f23335457b8b966d -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/account/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/password/reset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET account/password/reset/{token}`


<!-- END_1698a123f5626ee3f23335457b8b966d -->

<!-- START_12e09d78f8f7ef4c043f476ceb9edaec -->
## ride
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/ride" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/ride"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET ride`


<!-- END_12e09d78f8f7ef4c043f476ceb9edaec -->

<!-- START_1d7123a12a87d411a6cbd5ba4c2524e4 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/sendmail" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/sendmail"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET sendmail`


<!-- END_1d7123a12a87d411a6cbd5ba4c2524e4 -->

<!-- START_4156338936cf01a207f982e300b81881 -->
## sendmail/verify
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/sendmail/verify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/sendmail/verify"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST sendmail/verify`


<!-- END_4156338936cf01a207f982e300b81881 -->

<!-- START_ce594a2251d9d69ce6b8e5a2059a390b -->
## sendmail/createusers
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/sendmail/createusers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/sendmail/createusers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST sendmail/createusers`


<!-- END_ce594a2251d9d69ce6b8e5a2059a390b -->

<!-- START_f632107617eba8f5c7c70b2488b411f4 -->
## sendmail/form
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/sendmail/form" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/sendmail/form"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET sendmail/form`


<!-- END_f632107617eba8f5c7c70b2488b411f4 -->

<!-- START_30059a09ef3f0284c40e4d06962ce08d -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/dashboard" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/dashboard"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET dashboard`


<!-- END_30059a09ef3f0284c40e4d06962ce08d -->

<!-- START_5b2dffd5e517bd8f901609dee234ff2c -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/hour/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/hour/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "calculator": "MIN"
}
```

### HTTP Request
`GET hour/{id}`


<!-- END_5b2dffd5e517bd8f901609dee234ff2c -->

<!-- START_47f7fbb6bf98ef4cdc54b10f03cb3bdd -->
## Show the application profile.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET profile`


<!-- END_47f7fbb6bf98ef4cdc54b10f03cb3bdd -->

<!-- START_8685292c6ac7cf27b1a5e3aafae80abd -->
## Show the application profile.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/edit/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/edit/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET edit/profile`


<!-- END_8685292c6ac7cf27b1a5e3aafae80abd -->

<!-- START_0949c77c3fab5fce98ab0d939145324b -->
## Update profile.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST profile`


<!-- END_0949c77c3fab5fce98ab0d939145324b -->

<!-- START_0c3af215628268506300027655bad372 -->
## Show the application change password.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/change/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/change/password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET change/password`


<!-- END_0c3af215628268506300027655bad372 -->

<!-- START_2ebf2ff9f7f0b683f53ffb3db5b3e5b1 -->
## Change Password.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/change/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/change/password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST change/password`


<!-- END_2ebf2ff9f7f0b683f53ffb3db5b3e5b1 -->

<!-- START_1bf12a9202fc1e02984fb889fe0dec79 -->
## Ride Confirmation.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/confirm/ride" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/confirm/ride"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET confirm/ride`


<!-- END_1bf12a9202fc1e02984fb889fe0dec79 -->

<!-- START_5772df6652d9e55f380c4265c8d41d08 -->
## Create Ride.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/create/ride" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/create/ride"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST create/ride`


<!-- END_5772df6652d9e55f380c4265c8d41d08 -->

<!-- START_d5b0e0023ddaab207501fbe7a7c0e0c5 -->
## Cancel Ride.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/cancel/ride" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/cancel/ride"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST cancel/ride`


<!-- END_d5b0e0023ddaab207501fbe7a7c0e0c5 -->

<!-- START_48eb8351f36c52d178ebccb279cd8d71 -->
## payment for user.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/payment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/payment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST payment`


<!-- END_48eb8351f36c52d178ebccb279cd8d71 -->

<!-- START_76ebeb8c89cc3c88d414ed06050db4a3 -->
## Rate Ride.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/rate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/rate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST rate`


<!-- END_76ebeb8c89cc3c88d414ed06050db4a3 -->

<!-- START_a83fc44b9992861a5b35814011fca0eb -->
## referral
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/referral" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/referral"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET referral`


<!-- END_a83fc44b9992861a5b35814011fca0eb -->

<!-- START_9f27fbbce2512711a973fa4ef0399836 -->
## extend/trip
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/extend/trip" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/extend/trip"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST extend/trip`


<!-- END_9f27fbbce2512711a973fa4ef0399836 -->

<!-- START_fa0b0e896e8da187f79ea741feec06cd -->
## Get Request Status Ride.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/status" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/status"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET status`


<!-- END_fa0b0e896e8da187f79ea741feec06cd -->

<!-- START_1aecfdabac437b927bbb68bf97562bc0 -->
## user/incoming
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/user/incoming" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/user/incoming"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET user/incoming`


<!-- END_1aecfdabac437b927bbb68bf97562bc0 -->

<!-- START_19c663d8a0df549157d7a9d81b6cf413 -->
## Trips.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/trips" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/trips"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET trips`


<!-- END_19c663d8a0df549157d7a9d81b6cf413 -->

<!-- START_e4f3f8570b9b48dd1329d9b3eaed5bfc -->
## Notifications.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/notifications" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/notifications"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET notifications`


<!-- END_e4f3f8570b9b48dd1329d9b3eaed5bfc -->

<!-- START_3eff82b9597291d3127ce3b2d83426b9 -->
## Lost iteam.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/lostitem/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/lostitem/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET lostitem/{id}`


<!-- END_3eff82b9597291d3127ce3b2d83426b9 -->

<!-- START_336ccacbae6ce0f0a7ad02e8787a17e4 -->
## Lost Iteam Save.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/lostitem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/lostitem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST lostitem`


<!-- END_336ccacbae6ce0f0a7ad02e8787a17e4 -->

<!-- START_f4a0e5e51d0d732d5e8a6d29381d1ead -->
## Dispute.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/dispute/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/dispute/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET dispute/{id}`


<!-- END_f4a0e5e51d0d732d5e8a6d29381d1ead -->

<!-- START_1e0acc58fa51256ff6eb13d1c4335961 -->
## Dispute Save.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/dispute" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/dispute"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dispute`


<!-- END_1e0acc58fa51256ff6eb13d1c4335961 -->

<!-- START_5318036015d43568293ffbaca94537f1 -->
## Upcoming Trips.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/upcoming/trips" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/upcoming/trips"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET upcoming/trips`


<!-- END_5318036015d43568293ffbaca94537f1 -->

<!-- START_764abb286eeabc50f660337d7b830516 -->
## Wallet.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/wallet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/wallet"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET wallet`


<!-- END_764abb286eeabc50f660337d7b830516 -->

<!-- START_86ce0c0029d909ef5c024b6a261f069d -->
## add wallet money for user.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/add/money" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/add/money"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST add/money`


<!-- END_86ce0c0029d909ef5c024b6a261f069d -->

<!-- START_e8e6300b2f250645618de3953a49bc65 -->
## Payment.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/payment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/payment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET payment`


<!-- END_e8e6300b2f250645618de3953a49bc65 -->

<!-- START_b4bf2c2f108eaa2215869c7120cf6ffb -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/card" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/card"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[]
```

### HTTP Request
`GET card`


<!-- END_b4bf2c2f108eaa2215869c7120cf6ffb -->

<!-- START_09b90af17684cc0b6f75338e837b241c -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/card/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/card/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET card/create`


<!-- END_09b90af17684cc0b6f75338e837b241c -->

<!-- START_968819d5d40c8f47db134292fe8d49b8 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/card" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/card"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST card`


<!-- END_968819d5d40c8f47db134292fe8d49b8 -->

<!-- START_9f9a9ca8e1af9fceab6cded981f67d8d -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/card/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/card/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET card/{card}`


<!-- END_9f9a9ca8e1af9fceab6cded981f67d8d -->

<!-- START_57f68ff645d1d23a495dc05117b316c5 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/card/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/card/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET card/{card}/edit`


<!-- END_57f68ff645d1d23a495dc05117b316c5 -->

<!-- START_126f9cb55d98919fc0ad5e1b8cd0e40b -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://service2020.axum/card/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/card/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT card/{card}`

`PATCH card/{card}`


<!-- END_126f9cb55d98919fc0ad5e1b8cd0e40b -->

<!-- START_f479421735808735534f24f9dcc5ad5e -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/card/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/card/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE card/{card}`


<!-- END_f479421735808735534f24f9dcc5ad5e -->

<!-- START_cb8470b19ea0fe3a8f2a665a2a3411d2 -->
## Promotion.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/promotions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/promotions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET promotions`


<!-- END_cb8470b19ea0fe3a8f2a665a2a3411d2 -->

<!-- START_ac2e57a20e6f1c12f69157ff48184a11 -->
## Add promocode.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/promotions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/promotions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST promotions`


<!-- END_ac2e57a20e6f1c12f69157ff48184a11 -->

<!-- START_f7fa53488fbaac5e4aaca5d870ed68d3 -->
## fare
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/fare" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fare"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST fare`


<!-- END_f7fa53488fbaac5e4aaca5d870ed68d3 -->

<!-- START_137940db71833d7b10497ac1e69febba -->
## verify-credentials
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/verify-credentials" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/verify-credentials"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST verify-credentials`


<!-- END_137940db71833d7b10497ac1e69febba -->

<!-- START_80bc8a0cda6f17e4f3124aaf0ff0f90b -->
## payment/response
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/payment/response" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/payment/response"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET payment/response`


<!-- END_80bc8a0cda6f17e4f3124aaf0ff0f90b -->

<!-- START_73d46e600ea4e16d941644aaa4b7abd4 -->
## payment/failure
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/payment/failure" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/payment/failure"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET payment/failure`


<!-- END_73d46e600ea4e16d941644aaa4b7abd4 -->

<!-- START_d5c6d0892c0d8aacf85bfcc40e9f9aeb -->
## paytm/response
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/paytm/response" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/paytm/response"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST paytm/response`


<!-- END_d5c6d0892c0d8aacf85bfcc40e9f9aeb -->

<!-- START_33cdf5c64500c6a2cd1e15080dfc6d2e -->
## payu/response
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/payu/response" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/payu/response"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST payu/response`


<!-- END_33cdf5c64500c6a2cd1e15080dfc6d2e -->

<!-- START_43696f168c5dd076eb0376ca8fbda0d9 -->
## payu/failure
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/payu/failure" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/payu/failure"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST payu/failure`


<!-- END_43696f168c5dd076eb0376ca8fbda0d9 -->

<!-- START_0723aaf96a3511deebe67318c05c1eab -->
## track/{id}
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/track/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/track/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET track/{id}`


<!-- END_0723aaf96a3511deebe67318c05c1eab -->

<!-- START_9e907811025626d7a71da3c764aac4c9 -->
## track
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/track" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/track"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST track`


<!-- END_9e907811025626d7a71da3c764aac4c9 -->

<!-- START_1b187f1f7dda74c507a9ded08c1153b5 -->
## Dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/account" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET account`


<!-- END_1b187f1f7dda74c507a9ded08c1153b5 -->

<!-- START_742bb905a1bf2c1d0d173c784aec4eb8 -->
## Dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/account/dashboard" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/dashboard"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET account/dashboard`


<!-- END_742bb905a1bf2c1d0d173c784aec4eb8 -->

<!-- START_d5dafaf88795837cfab5a44777c9117e -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/account/provider" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/provider"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET account/provider`


<!-- END_d5dafaf88795837cfab5a44777c9117e -->

<!-- START_7059b945df6df3a25d43efe496955776 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/account/provider/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/provider/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET account/provider/create`


<!-- END_7059b945df6df3a25d43efe496955776 -->

<!-- START_71c0eeda7c3fbcc52b80e5a92f5e8c84 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/account/provider" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/provider"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST account/provider`


<!-- END_71c0eeda7c3fbcc52b80e5a92f5e8c84 -->

<!-- START_cc94883562df698ea0b6e47560662ece -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/account/provider/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/provider/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET account/provider/{provider}`


<!-- END_cc94883562df698ea0b6e47560662ece -->

<!-- START_19cd7fa7a70b3059b201a7079563952f -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/account/provider/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/provider/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET account/provider/{provider}/edit`


<!-- END_19cd7fa7a70b3059b201a7079563952f -->

<!-- START_5852c2a63bc63511a295049cbe6d7add -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://service2020.axum/account/provider/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/provider/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT account/provider/{provider}`

`PATCH account/provider/{provider}`


<!-- END_5852c2a63bc63511a295049cbe6d7add -->

<!-- START_2ce7bff84d2bc05c9dbfea7e4799ad92 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/account/provider/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/provider/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE account/provider/{provider}`


<!-- END_2ce7bff84d2bc05c9dbfea7e4799ad92 -->

<!-- START_51363962f2c557b8804d6dad1df886da -->
## account/requests/{id}
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/account/requests/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/requests/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET account/requests/{id}`


<!-- END_51363962f2c557b8804d6dad1df886da -->

<!-- START_e0f011bb9cf7391ec40db3f267a1d031 -->
## account/provider/{id}/statement
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/account/provider/1/statement" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/provider/1/statement"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET account/provider/{id}/statement`


<!-- END_e0f011bb9cf7391ec40db3f267a1d031 -->

<!-- START_6593a97d5d72b8c5bd56f66deb5ee727 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/account/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET account/profile`


<!-- END_6593a97d5d72b8c5bd56f66deb5ee727 -->

<!-- START_9d5148fe369f9dddbd7232926929768f -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/account/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST account/profile`


<!-- END_9d5148fe369f9dddbd7232926929768f -->

<!-- START_d6758cd690f2495cef8fbefe4c3f1837 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/account/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET account/password`


<!-- END_d6758cd690f2495cef8fbefe4c3f1837 -->

<!-- START_ae9cba65a0f00aa2c0d1cf024c91adc1 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/account/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST account/password`


<!-- END_ae9cba65a0f00aa2c0d1cf024c91adc1 -->

<!-- START_17ea6dfb77a9246e525cdee20762e966 -->
## account statements.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/account/statement" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/statement"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET account/statement`


<!-- END_17ea6dfb77a9246e525cdee20762e966 -->

<!-- START_3b6f3b9fd5e2b7f08817c50cfa2b6889 -->
## account statements.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/account/statement/provider" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/statement/provider"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET account/statement/provider`


<!-- END_3b6f3b9fd5e2b7f08817c50cfa2b6889 -->

<!-- START_d1e391bed76e4b9fb9699c12e74f5bb9 -->
## account/statement/user
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/account/statement/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/statement/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET account/statement/user`


<!-- END_d1e391bed76e4b9fb9699c12e74f5bb9 -->

<!-- START_fe19c46b49c093a806c1118dca0c6202 -->
## account/statement/fleet
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/account/statement/fleet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/statement/fleet"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET account/statement/fleet`


<!-- END_fe19c46b49c093a806c1118dca0c6202 -->

<!-- START_3942efed7abc69ca6d65b605ae366cb7 -->
## account statements today.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/account/statement/range" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/statement/range"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET account/statement/range`


<!-- END_3942efed7abc69ca6d65b605ae366cb7 -->

<!-- START_7c39a15e57244a56f00c7614f5f55a7e -->
## account statements today.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/account/statement/today" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/statement/today"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET account/statement/today`


<!-- END_7c39a15e57244a56f00c7614f5f55a7e -->

<!-- START_758b450cc721895eeaee652d82f5df63 -->
## account statements monthly.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/account/statement/monthly" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/statement/monthly"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET account/statement/monthly`


<!-- END_758b450cc721895eeaee652d82f5df63 -->

<!-- START_b9d5dc2c4ea721d25d8013fc2f017442 -->
## account statements monthly.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/account/statement/yearly" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/account/statement/yearly"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET account/statement/yearly`


<!-- END_b9d5dc2c4ea721d25d8013fc2f017442 -->

<!-- START_7dc126a42e5bfa6d5169a7243f3f4ec1 -->
## Dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET fleet`


<!-- END_7dc126a42e5bfa6d5169a7243f3f4ec1 -->

<!-- START_66f3a1a7c8b48db9f45a0f9b2853b808 -->
## Dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/dashboard" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/dashboard"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET fleet/dashboard`


<!-- END_66f3a1a7c8b48db9f45a0f9b2853b808 -->

<!-- START_78d3adf332e6714e119816e98e813957 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/provider" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/provider"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET fleet/provider`


<!-- END_78d3adf332e6714e119816e98e813957 -->

<!-- START_81957c6ca2585b11ef65f02ff4d2bc9a -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/provider/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/provider/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET fleet/provider/create`


<!-- END_81957c6ca2585b11ef65f02ff4d2bc9a -->

<!-- START_8a2cc75aae0e76cff21aefbf6fe41962 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/fleet/provider" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/provider"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST fleet/provider`


<!-- END_8a2cc75aae0e76cff21aefbf6fe41962 -->

<!-- START_3afd194bba1289a83705e0cfc5ad1559 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/provider/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/provider/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET fleet/provider/{provider}`


<!-- END_3afd194bba1289a83705e0cfc5ad1559 -->

<!-- START_2ba4d28feeb484d3f5806731d98979b2 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/provider/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/provider/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET fleet/provider/{provider}/edit`


<!-- END_2ba4d28feeb484d3f5806731d98979b2 -->

<!-- START_0a67fff6af9543fd57a7b3ec94f3dba5 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://service2020.axum/fleet/provider/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/provider/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT fleet/provider/{provider}`

`PATCH fleet/provider/{provider}`


<!-- END_0a67fff6af9543fd57a7b3ec94f3dba5 -->

<!-- START_c246b7b2fca9cb3b1d6f74dcc9525585 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/fleet/provider/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/provider/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE fleet/provider/{provider}`


<!-- END_c246b7b2fca9cb3b1d6f74dcc9525585 -->

<!-- START_cc6663bc48cc37e74b817d6f60991063 -->
## Provider Rating.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/review/provider" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/review/provider"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET fleet/review/provider`


<!-- END_cc6663bc48cc37e74b817d6f60991063 -->

<!-- START_f1dbb78635971da0adf774c8e3aa0e8c -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/provider/1/approve" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/provider/1/approve"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET fleet/provider/{id}/approve`


<!-- END_f1dbb78635971da0adf774c8e3aa0e8c -->

<!-- START_d0e75213da21434f57b71aef0c609279 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/provider/1/disapprove" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/provider/1/disapprove"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET fleet/provider/{id}/disapprove`


<!-- END_d0e75213da21434f57b71aef0c609279 -->

<!-- START_46fc22e108cd649b00f17c29ac464bde -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/provider/1/request" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/provider/1/request"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET fleet/provider/{id}/request`


<!-- END_46fc22e108cd649b00f17c29ac464bde -->

<!-- START_2697c1d1e9652d0be9c5131be58df170 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/provider/1/document" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/provider/1/document"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET fleet/provider/{provider}/document`


<!-- END_2697c1d1e9652d0be9c5131be58df170 -->

<!-- START_248011350bbb436e924c76c2f382b03f -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/provider/1/document/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/provider/1/document/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET fleet/provider/{provider}/document/create`


<!-- END_248011350bbb436e924c76c2f382b03f -->

<!-- START_99d278a8cc4f65999a4eab2cd19b2ebe -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/fleet/provider/1/document" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/provider/1/document"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST fleet/provider/{provider}/document`


<!-- END_99d278a8cc4f65999a4eab2cd19b2ebe -->

<!-- START_df1834681f43397cb25b4e5daafd1fc6 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/provider/1/document/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/provider/1/document/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET fleet/provider/{provider}/document/{document}`


<!-- END_df1834681f43397cb25b4e5daafd1fc6 -->

<!-- START_3e9582048f147ef3d2c5f175658c6423 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/provider/1/document/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/provider/1/document/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET fleet/provider/{provider}/document/{document}/edit`


<!-- END_3e9582048f147ef3d2c5f175658c6423 -->

<!-- START_2e89a4c84a50597289cb5411b8bf4ef6 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://service2020.axum/fleet/provider/1/document/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/provider/1/document/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT fleet/provider/{provider}/document/{document}`

`PATCH fleet/provider/{provider}/document/{document}`


<!-- END_2e89a4c84a50597289cb5411b8bf4ef6 -->

<!-- START_a32a01754926da145db3ba395f7fad7e -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/fleet/provider/1/document/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/provider/1/document/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE fleet/provider/{provider}/document/{document}`


<!-- END_a32a01754926da145db3ba395f7fad7e -->

<!-- START_a10c3e1608a05447895c464244ed53a4 -->
## Delete the service type of the provider.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/fleet/provider/1/service/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/provider/1/service/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE fleet/provider/{provider}/service/{document}`


<!-- END_a10c3e1608a05447895c464244ed53a4 -->

<!-- START_a4a369878efecf3b662c3098a7c792eb -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/user/1/request" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/user/1/request"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET fleet/user/{id}/request`


<!-- END_a4a369878efecf3b662c3098a7c792eb -->

<!-- START_0287a3aec9b4b98ae1e90738053fcb7a -->
## account statements.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/statement" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/statement"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET fleet/statement`


<!-- END_0287a3aec9b4b98ae1e90738053fcb7a -->

<!-- START_1ef8026d1515f7238bc633f171ceca69 -->
## account statements.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/statement/provider" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/statement/provider"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET fleet/statement/provider`


<!-- END_1ef8026d1515f7238bc633f171ceca69 -->

<!-- START_d8cfea1f36d28f7e22a27f067f6e8b7f -->
## Map of all Users and Drivers.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/map" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/map"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET fleet/map`


<!-- END_d8cfea1f36d28f7e22a27f067f6e8b7f -->

<!-- START_6018a18dcf4dd65227c826d76954bb6c -->
## Map of all Users and Drivers.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/map/ajax" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/map/ajax"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET fleet/map/ajax`


<!-- END_6018a18dcf4dd65227c826d76954bb6c -->

<!-- START_5eafaec6898433b7c8931d3c23e47534 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET fleet/profile`


<!-- END_5eafaec6898433b7c8931d3c23e47534 -->

<!-- START_a3ade764694655f07828f9e5df421bff -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/fleet/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST fleet/profile`


<!-- END_a3ade764694655f07828f9e5df421bff -->

<!-- START_4976cb4072a5b5d0ef4dd87e67ef201c -->
## fleet/wallet
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/wallet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/wallet"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET fleet/wallet`


<!-- END_4976cb4072a5b5d0ef4dd87e67ef201c -->

<!-- START_fc39c1de3882a713e8b0d8959b551f1e -->
## fleet/transfer
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/transfer" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/transfer"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET fleet/transfer`


<!-- END_fc39c1de3882a713e8b0d8959b551f1e -->

<!-- START_f48c96cebfdc2394465c4e2d5a32a8e7 -->
## fleet/transfer/send
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/fleet/transfer/send" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/transfer/send"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST fleet/transfer/send`


<!-- END_f48c96cebfdc2394465c4e2d5a32a8e7 -->

<!-- START_ae9b77dde769af7e9f54d4b258763211 -->
## fleet/transfer/cancel
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/transfer/cancel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/transfer/cancel"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET fleet/transfer/cancel`


<!-- END_ae9b77dde769af7e9f54d4b258763211 -->

<!-- START_d0daf441cf262c763ccac0cddbc11124 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET fleet/password`


<!-- END_d0daf441cf262c763ccac0cddbc11124 -->

<!-- START_ca4d2c7c21cab7927d93f23c199912ba -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/fleet/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST fleet/password`


<!-- END_ca4d2c7c21cab7927d93f23c199912ba -->

<!-- START_f7dfa183f3732543773b36e0624f1775 -->
## fleet/requests
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/requests" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/requests"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET fleet/requests`


<!-- END_f7dfa183f3732543773b36e0624f1775 -->

<!-- START_a0e998204e45f6a77227699a447b2bef -->
## fleet/requests/{id}
> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/fleet/requests/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/requests/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE fleet/requests/{id}`


<!-- END_a0e998204e45f6a77227699a447b2bef -->

<!-- START_0d85a2c672f25b52972f9a16f2b21982 -->
## fleet/requests/{id}
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/requests/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/requests/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET fleet/requests/{id}`


<!-- END_0d85a2c672f25b52972f9a16f2b21982 -->

<!-- START_b2cbfcab6d2e2a342bbd2c51d641a00b -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/scheduled" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/scheduled"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET fleet/scheduled`


<!-- END_b2cbfcab6d2e2a342bbd2c51d641a00b -->

<!-- START_746ef1d108126936bbbf120fc365f174 -->
## fleet/cards
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/fleet/cards" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/cards"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET fleet/cards`


<!-- END_746ef1d108126936bbbf120fc365f174 -->

<!-- START_6e189621968eb60350bcc9537246b61c -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/fleet/card/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/card/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST fleet/card/store`


<!-- END_6e189621968eb60350bcc9537246b61c -->

<!-- START_e2fce259f5325b2c99ca8faa13662e4b -->
## fleet/card/set
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/fleet/card/set" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/card/set"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST fleet/card/set`


<!-- END_e2fce259f5325b2c99ca8faa13662e4b -->

<!-- START_fda12fbf38bca99820b8a5468d2e70cc -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/fleet/card/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/fleet/card/destroy"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE fleet/card/destroy`


<!-- END_fda12fbf38bca99820b8a5468d2e70cc -->

<!-- START_66b1f459e0831e1f287ae9d69dcaa6d3 -->
## Dispatcher Panel.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/dispatcher" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/dispatcher"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET dispatcher`


<!-- END_66b1f459e0831e1f287ae9d69dcaa6d3 -->

<!-- START_d28e08b7349c303c40719b164321f94c -->
## Dispatcher Panel.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/dispatcher/dispatcher" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/dispatcher/dispatcher"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET dispatcher/dispatcher`


<!-- END_d28e08b7349c303c40719b164321f94c -->

<!-- START_8c53a0d5779b5554b928d1968ac6cbc5 -->
## Create manual request.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/dispatcher/dispatcher" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/dispatcher/dispatcher"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dispatcher/dispatcher`


<!-- END_8c53a0d5779b5554b928d1968ac6cbc5 -->

<!-- START_4c1ce9fdc4af026a4ddd4d0c64e01514 -->
## Display a listing of the active trips in the application.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/dispatcher/dispatcher/trips" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/dispatcher/dispatcher/trips"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET dispatcher/dispatcher/trips`


<!-- END_4c1ce9fdc4af026a4ddd4d0c64e01514 -->

<!-- START_73bf27018b322451cfa002d85a10d16b -->
## Create manual request.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/dispatcher/dispatcher/trips/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/dispatcher/dispatcher/trips/1/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET dispatcher/dispatcher/trips/{trip}/{provider}`


<!-- END_73bf27018b322451cfa002d85a10d16b -->

<!-- START_16f417084f9638e363b19cd4b61e32ce -->
## Display a listing of the users in the application.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/dispatcher/dispatcher/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/dispatcher/dispatcher/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET dispatcher/dispatcher/users`


<!-- END_16f417084f9638e363b19cd4b61e32ce -->

<!-- START_74a3a2ed6dc4a01c5073410ad87b4709 -->
## Display a listing of the active trips in the application.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/dispatcher/dispatcher/providers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/dispatcher/dispatcher/providers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET dispatcher/dispatcher/providers`


<!-- END_74a3a2ed6dc4a01c5073410ad87b4709 -->

<!-- START_e17a3dd50c9254a043e64cf5f1d7afa1 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/dispatcher/service" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/dispatcher/service"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET dispatcher/service`


<!-- END_e17a3dd50c9254a043e64cf5f1d7afa1 -->

<!-- START_8a053a70a889aeb094cdddee21287652 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/dispatcher/service/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/dispatcher/service/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET dispatcher/service/create`


<!-- END_8a053a70a889aeb094cdddee21287652 -->

<!-- START_928608f6d033c686b57b01b4781e2bc1 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/dispatcher/service" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/dispatcher/service"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dispatcher/service`


<!-- END_928608f6d033c686b57b01b4781e2bc1 -->

<!-- START_8fcbb48f3b0c2cdd5a188f8f048eecfb -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/dispatcher/service/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/dispatcher/service/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET dispatcher/service/{service}`


<!-- END_8fcbb48f3b0c2cdd5a188f8f048eecfb -->

<!-- START_2a6facbe5e0a3c1758c3716b4e02012d -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/dispatcher/service/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/dispatcher/service/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET dispatcher/service/{service}/edit`


<!-- END_2a6facbe5e0a3c1758c3716b4e02012d -->

<!-- START_e67fdab08cf3055f60c3a3b1052836a3 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://service2020.axum/dispatcher/service/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/dispatcher/service/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT dispatcher/service/{service}`

`PATCH dispatcher/service/{service}`


<!-- END_e67fdab08cf3055f60c3a3b1052836a3 -->

<!-- START_c122321967a655231f5af51512450d90 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/dispatcher/service/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/dispatcher/service/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE dispatcher/service/{service}`


<!-- END_c122321967a655231f5af51512450d90 -->

<!-- START_2fd9320686eae5f4c6b0f29dee9710cc -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/dispatcher/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/dispatcher/password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET dispatcher/password`


<!-- END_2fd9320686eae5f4c6b0f29dee9710cc -->

<!-- START_37b6a8063b180b59d5b32f0cdaae2a97 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/dispatcher/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/dispatcher/password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dispatcher/password`


<!-- END_37b6a8063b180b59d5b32f0cdaae2a97 -->

<!-- START_d6f70583daf7525bcf8f264973b51061 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/dispatcher/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/dispatcher/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET dispatcher/profile`


<!-- END_d6f70583daf7525bcf8f264973b51061 -->

<!-- START_930131822949d0fd0751d4df58fffa3a -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/dispatcher/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/dispatcher/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dispatcher/profile`


<!-- END_930131822949d0fd0751d4df58fffa3a -->

<!-- START_551deb0d3ce8554a4eb02ff137f0ce09 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/provider" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET provider`


<!-- END_551deb0d3ce8554a4eb02ff137f0ce09 -->

<!-- START_06fb847b2ed8a487a9940a8e5b41d3e1 -->
## Get the trip history of the provider

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/provider/trips" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/trips"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET provider/trips`


<!-- END_06fb847b2ed8a487a9940a8e5b41d3e1 -->

<!-- START_4a621fc82768e6c5a9e318ec436ded1b -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/provider/incoming" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/incoming"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET provider/incoming`


<!-- END_4a621fc82768e6c5a9e318ec436ded1b -->

<!-- START_44f7d4c7cf5bbd7c533a18bb571c8ad5 -->
## Show the application dashboard.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/provider/request/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/request/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST provider/request/{id}`


<!-- END_44f7d4c7cf5bbd7c533a18bb571c8ad5 -->

<!-- START_41b16407905ced56bd7919d600ebf6f7 -->
## Show the application dashboard.

> Example request:

```bash
curl -X PATCH \
    "http://service2020.axum/provider/request/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/request/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PATCH provider/request/{id}`


<!-- END_41b16407905ced56bd7919d600ebf6f7 -->

<!-- START_7f141ab68257de799ebb2321af6c3dee -->
## Show the application dashboard.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/provider/request/1/rate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/request/1/rate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST provider/request/{id}/rate`


<!-- END_7f141ab68257de799ebb2321af6c3dee -->

<!-- START_11d9dd70b66429805defd2fecb7ab689 -->
## Show the application dashboard.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/provider/request/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/request/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE provider/request/{id}`


<!-- END_11d9dd70b66429805defd2fecb7ab689 -->

<!-- START_4a2a2ca464a824cfa07a552d01fd70a7 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/provider/earnings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/earnings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET provider/earnings`


<!-- END_4a2a2ca464a824cfa07a552d01fd70a7 -->

<!-- START_c8c40f6c64b2aba4aa7c5487dbbd9433 -->
## upcoming history.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/provider/upcoming" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/upcoming"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET provider/upcoming`


<!-- END_c8c40f6c64b2aba4aa7c5487dbbd9433 -->

<!-- START_a4355ed2419b97f8d8e7773dd7ad50e6 -->
## Show the application dashboard.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/provider/cancel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/cancel"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST provider/cancel`


<!-- END_a4355ed2419b97f8d8e7773dd7ad50e6 -->

<!-- START_64bae83ee774997349f16f7008704c2b -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/provider/documents" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/documents"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET provider/documents`


<!-- END_64bae83ee774997349f16f7008704c2b -->

<!-- START_dd3816659fd689d7f1f474a054bed71a -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/provider/documents/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/documents/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET provider/documents/create`


<!-- END_dd3816659fd689d7f1f474a054bed71a -->

<!-- START_63a33b9ae10b7282c681e8e58959e0d5 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/provider/documents" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/documents"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST provider/documents`


<!-- END_63a33b9ae10b7282c681e8e58959e0d5 -->

<!-- START_668193197511fbfd5330707853bcdd4c -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/provider/documents/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/documents/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET provider/documents/{document}`


<!-- END_668193197511fbfd5330707853bcdd4c -->

<!-- START_0a45cb5ec900fbcdedec7396c86d0f4d -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/provider/documents/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/documents/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET provider/documents/{document}/edit`


<!-- END_0a45cb5ec900fbcdedec7396c86d0f4d -->

<!-- START_bbd77d3a03db61ba0544b3db6a4dc86f -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://service2020.axum/provider/documents/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/documents/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT provider/documents/{document}`

`PATCH provider/documents/{document}`


<!-- END_bbd77d3a03db61ba0544b3db6a4dc86f -->

<!-- START_321dd47b38e737037d3be259e520c77c -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/provider/documents/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/documents/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE provider/documents/{document}`


<!-- END_321dd47b38e737037d3be259e520c77c -->

<!-- START_e68a26f462a2a6b943c5d56e0822586a -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/provider/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET provider/profile`


<!-- END_e68a26f462a2a6b943c5d56e0822586a -->

<!-- START_6859afb3c9e2ef7891d760b4ca854d91 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/provider/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST provider/profile`


<!-- END_6859afb3c9e2ef7891d760b4ca854d91 -->

<!-- START_8ed35443f261ef9ecca30996125b0e0c -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/provider/location" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/location"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET provider/location`


<!-- END_8ed35443f261ef9ecca30996125b0e0c -->

<!-- START_efd1e4da582f21b9d5c40144c132fc15 -->
## Update latitude and longitude of the user.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/provider/location" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/location"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST provider/location`


<!-- END_efd1e4da582f21b9d5c40144c132fc15 -->

<!-- START_39c1348edf9b1f90cea47c84b2646930 -->
## Show the application change password.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/provider/profile/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/profile/password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET provider/profile/password`


<!-- END_39c1348edf9b1f90cea47c84b2646930 -->

<!-- START_42a45abc5affe45771752987982e08ee -->
## Change Password.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/provider/change/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/change/password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST provider/change/password`


<!-- END_42a45abc5affe45771752987982e08ee -->

<!-- START_1e75577653c067249de04a62bb52bd22 -->
## available.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/provider/profile/available" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/profile/available"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST provider/profile/available`


<!-- END_1e75577653c067249de04a62bb52bd22 -->

<!-- START_7fa4090e9ba1712170d8a06d2f6ee8af -->
## provider/wallet_transation
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/provider/wallet_transation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/wallet_transation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET provider/wallet_transation`


<!-- END_7fa4090e9ba1712170d8a06d2f6ee8af -->

<!-- START_e171509005e071dfd6736b48ab8f62ae -->
## provider/wallet_transation/details
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/provider/wallet_transation/details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/wallet_transation/details"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST provider/wallet_transation/details`


<!-- END_e171509005e071dfd6736b48ab8f62ae -->

<!-- START_0c76eba7a2ba4406689351da8e1accec -->
## provider/transfer
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/provider/transfer" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/transfer"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET provider/transfer`


<!-- END_0c76eba7a2ba4406689351da8e1accec -->

<!-- START_fc45668300a7a8aadd4f69796d3cf3bb -->
## provider/transfer/send
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/provider/transfer/send" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/transfer/send"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST provider/transfer/send`


<!-- END_fc45668300a7a8aadd4f69796d3cf3bb -->

<!-- START_071e764bdda62c5028df6477fa677334 -->
## provider/transfer/cancel
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/provider/transfer/cancel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/transfer/cancel"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET provider/transfer/cancel`


<!-- END_071e764bdda62c5028df6477fa677334 -->

<!-- START_5da5d5689faf12c2c397948e0ca10fc0 -->
## provider/stripe/account
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/provider/stripe/account" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/stripe/account"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET provider/stripe/account`


<!-- END_5da5d5689faf12c2c397948e0ca10fc0 -->

<!-- START_097a6cf836dfa3fdf7b7e4a88741b87d -->
## provider/cards
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/provider/cards" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/cards"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET provider/cards`


<!-- END_097a6cf836dfa3fdf7b7e4a88741b87d -->

<!-- START_48bb04207de9bbb21daf6e65c99a8dd7 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/provider/card/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/card/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST provider/card/store`


<!-- END_48bb04207de9bbb21daf6e65c99a8dd7 -->

<!-- START_85bf1cd70042c6848ca00c6d150cc2ea -->
## provider/card/set
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/provider/card/set" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/card/set"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST provider/card/set`


<!-- END_85bf1cd70042c6848ca00c6d150cc2ea -->

<!-- START_298b8bf4f63cda75e5c461c28b45b3a6 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/provider/card/destroy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/card/destroy"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE provider/card/destroy`


<!-- END_298b8bf4f63cda75e5c461c28b45b3a6 -->

<!-- START_ce770617085a78ee10150d861c2084e8 -->
## provider/referral
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/provider/referral" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/referral"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET provider/referral`


<!-- END_ce770617085a78ee10150d861c2084e8 -->

<!-- START_01127209cabf09055d95e721c4f70589 -->
## provider/notifications
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/provider/notifications" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/notifications"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET provider/notifications`


<!-- END_01127209cabf09055d95e721c4f70589 -->

<!-- START_c1c4cb7575baea5a75bff2896434a151 -->
## Dispute.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/provider/dispute/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/dispute/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET provider/dispute/{id}`


<!-- END_c1c4cb7575baea5a75bff2896434a151 -->

<!-- START_110c02bf235c89522ed3818bbf5a0b53 -->
## Dispute Save.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/provider/dispute" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/dispute"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST provider/dispute`


<!-- END_110c02bf235c89522ed3818bbf5a0b53 -->

<!-- START_506966147bf056d5aca78cb75a8e5218 -->
## provider/waiting
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/provider/waiting" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/waiting"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST provider/waiting`


<!-- END_506966147bf056d5aca78cb75a8e5218 -->

<!-- START_8d837b8cc2826280553b5b1af35e78d2 -->
## add wallet money for user.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/provider/add/money" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/add/money"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST provider/add/money`


<!-- END_8d837b8cc2826280553b5b1af35e78d2 -->

<!-- START_e40bc60a458a9740730202aaec04f818 -->
## Dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin`


<!-- END_e40bc60a458a9740730202aaec04f818 -->

<!-- START_8a59594ff635c00027a130968fc47527 -->
## Dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/dashboard" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dashboard"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/dashboard`


<!-- END_8a59594ff635c00027a130968fc47527 -->

<!-- START_9b7ddf8579203f835d9794c691817446 -->
## Heat Map.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/get/heatmap" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/get/heatmap"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/get/heatmap`


<!-- END_9b7ddf8579203f835d9794c691817446 -->

<!-- START_f0e2d8b63d91ac13bc2cbc734be3cf26 -->
## admin/heatmap
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/heatmap" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/heatmap"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/heatmap`


<!-- END_f0e2d8b63d91ac13bc2cbc734be3cf26 -->

<!-- START_437a750fa4b0821a751f0050ebe30058 -->
## admin/godseye
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/godseye" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/godseye"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/godseye`


<!-- END_437a750fa4b0821a751f0050ebe30058 -->

<!-- START_730e90fa3f7f157d98c556aeb95da50d -->
## admin/godseye/list
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/godseye/list" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/godseye/list"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/godseye/list`


<!-- END_730e90fa3f7f157d98c556aeb95da50d -->

<!-- START_5c8cd817e9e3aa03a88622f960fd64fa -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/translation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/translation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/translation`


<!-- END_5c8cd817e9e3aa03a88622f960fd64fa -->

<!-- START_bae38fdc537b50054b1065df91cb0f15 -->
## admin/fare
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/fare" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/fare"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/fare`


<!-- END_bae38fdc537b50054b1065df91cb0f15 -->

<!-- START_99510b837b3d5fb8a503e18792f8a5f2 -->
## admin/logs
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/logs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/logs"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/logs`


<!-- END_99510b837b3d5fb8a503e18792f8a5f2 -->

<!-- START_eb5102eeaec5becced7a088d205e2850 -->
## admin/download/{id}
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/download/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/download/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/download/{id}`


<!-- END_eb5102eeaec5becced7a088d205e2850 -->

<!-- START_d3a0158a4d39d851f308f4864be20cf4 -->
## Dispatcher Panel.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/dispatcher" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dispatcher"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/dispatcher`


<!-- END_d3a0158a4d39d851f308f4864be20cf4 -->

<!-- START_7e96338b43fe360c2f06e056038d75e8 -->
## Create manual request.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/dispatcher" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dispatcher"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/dispatcher`


<!-- END_7e96338b43fe360c2f06e056038d75e8 -->

<!-- START_72b9fc7181e2bbd7da337dabfdaa97cc -->
## Display a listing of the active trips in the application.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/dispatcher/trips" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dispatcher/trips"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/dispatcher/trips`


<!-- END_72b9fc7181e2bbd7da337dabfdaa97cc -->

<!-- START_792002c9cc6ed237c39fca6cac6bf4fd -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/dispatcher/cancel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dispatcher/cancel"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/dispatcher/cancel`


<!-- END_792002c9cc6ed237c39fca6cac6bf4fd -->

<!-- START_55918a6b89963ea36c6b09be91d16284 -->
## Create manual request.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/dispatcher/trips/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dispatcher/trips/1/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/dispatcher/trips/{trip}/{provider}`


<!-- END_55918a6b89963ea36c6b09be91d16284 -->

<!-- START_24fc083b81bf6128262582a3393157a8 -->
## Display a listing of the users in the application.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/dispatcher/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dispatcher/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/dispatcher/users`


<!-- END_24fc083b81bf6128262582a3393157a8 -->

<!-- START_daa74e78e38b8320bcee5f909ba130ec -->
## Display a listing of the active trips in the application.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/dispatcher/providers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dispatcher/providers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/dispatcher/providers`


<!-- END_daa74e78e38b8320bcee5f909ba130ec -->

<!-- START_bd487ab94d8034c2d13644bb1772fdfa -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/user`


<!-- END_bd487ab94d8034c2d13644bb1772fdfa -->

<!-- START_85482a73dd59bd3ef1adaab154cc5407 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/user/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/user/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/user/create`


<!-- END_85482a73dd59bd3ef1adaab154cc5407 -->

<!-- START_71dba47ec1215d1147a3f8e59c55751a -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/user`


<!-- END_71dba47ec1215d1147a3f8e59c55751a -->

<!-- START_3b3de25d21f37e1748b345027c37ce73 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/user/{user}`


<!-- END_3b3de25d21f37e1748b345027c37ce73 -->

<!-- START_8dbd3c8dace74c8cc20dbdadc3a61eed -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/user/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/user/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/user/{user}/edit`


<!-- END_8dbd3c8dace74c8cc20dbdadc3a61eed -->

<!-- START_7bc8a51548d7c6e9ac5bc7dda1263ba7 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://service2020.axum/admin/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/user/{user}`

`PATCH admin/user/{user}`


<!-- END_7bc8a51548d7c6e9ac5bc7dda1263ba7 -->

<!-- START_b8a25da15b804e04ecaa4bf05806041e -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/admin/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/user/{user}`


<!-- END_b8a25da15b804e04ecaa4bf05806041e -->

<!-- START_66af8201d8a5a35c06ef95b1aa7eb0ca -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/dispatch-manager" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dispatch-manager"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/dispatch-manager`


<!-- END_66af8201d8a5a35c06ef95b1aa7eb0ca -->

<!-- START_4fc46d8bf79535a81933aeb470e51599 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/dispatch-manager/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dispatch-manager/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/dispatch-manager/create`


<!-- END_4fc46d8bf79535a81933aeb470e51599 -->

<!-- START_19bf44b1048cc3d8da6680a4944568a6 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/dispatch-manager" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dispatch-manager"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/dispatch-manager`


<!-- END_19bf44b1048cc3d8da6680a4944568a6 -->

<!-- START_ae7b7664c7f483edc3cc2f476a135a62 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/dispatch-manager/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dispatch-manager/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/dispatch-manager/{dispatch_manager}`


<!-- END_ae7b7664c7f483edc3cc2f476a135a62 -->

<!-- START_95cf827cbd92edfdeee4a2fa3077b49e -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/dispatch-manager/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dispatch-manager/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/dispatch-manager/{dispatch_manager}/edit`


<!-- END_95cf827cbd92edfdeee4a2fa3077b49e -->

<!-- START_fe4cfdfb658a986260527645350e46ca -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://service2020.axum/admin/dispatch-manager/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dispatch-manager/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/dispatch-manager/{dispatch_manager}`

`PATCH admin/dispatch-manager/{dispatch_manager}`


<!-- END_fe4cfdfb658a986260527645350e46ca -->

<!-- START_c693a0bc6232a882e291dbe504c234a4 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/admin/dispatch-manager/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dispatch-manager/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/dispatch-manager/{dispatch_manager}`


<!-- END_c693a0bc6232a882e291dbe504c234a4 -->

<!-- START_5251f7e25306b7dcbb05588eef8c6166 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/account-manager" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/account-manager"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/account-manager`


<!-- END_5251f7e25306b7dcbb05588eef8c6166 -->

<!-- START_4da8b909cdc29501d0a1b25e8066df48 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/account-manager/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/account-manager/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/account-manager/create`


<!-- END_4da8b909cdc29501d0a1b25e8066df48 -->

<!-- START_bc263564da26a90fd62be54bf36381b4 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/account-manager" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/account-manager"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/account-manager`


<!-- END_bc263564da26a90fd62be54bf36381b4 -->

<!-- START_13e2946263166bdb4a370a88d3deed32 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/account-manager/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/account-manager/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/account-manager/{account_manager}`


<!-- END_13e2946263166bdb4a370a88d3deed32 -->

<!-- START_8af482406f20cfc10738b628ff611ba1 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/account-manager/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/account-manager/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/account-manager/{account_manager}/edit`


<!-- END_8af482406f20cfc10738b628ff611ba1 -->

<!-- START_b9d5c1a48914ab952f7cac742dcd87a4 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://service2020.axum/admin/account-manager/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/account-manager/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/account-manager/{account_manager}`

`PATCH admin/account-manager/{account_manager}`


<!-- END_b9d5c1a48914ab952f7cac742dcd87a4 -->

<!-- START_b9c9bb5b401c30c37a80e9f07f6e09a6 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/admin/account-manager/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/account-manager/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/account-manager/{account_manager}`


<!-- END_b9c9bb5b401c30c37a80e9f07f6e09a6 -->

<!-- START_2ff3f7a3df28fe5c040c8c95e4452918 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/dispute-manager" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dispute-manager"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/dispute-manager`


<!-- END_2ff3f7a3df28fe5c040c8c95e4452918 -->

<!-- START_af15c93d2a88c4a37fef31cbcf6bb8a5 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/dispute-manager/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dispute-manager/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/dispute-manager/create`


<!-- END_af15c93d2a88c4a37fef31cbcf6bb8a5 -->

<!-- START_e59a26d11ab9b087a095f19213fa3efc -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/dispute-manager" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dispute-manager"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/dispute-manager`


<!-- END_e59a26d11ab9b087a095f19213fa3efc -->

<!-- START_5e324f4ef83ed3036a5c692c56c890e8 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/dispute-manager/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dispute-manager/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/dispute-manager/{dispute_manager}`


<!-- END_5e324f4ef83ed3036a5c692c56c890e8 -->

<!-- START_215a577697c9604db93042ac7ef68d38 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/dispute-manager/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dispute-manager/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/dispute-manager/{dispute_manager}/edit`


<!-- END_215a577697c9604db93042ac7ef68d38 -->

<!-- START_08f7a8b333969deff7ba6cb44ce6779e -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://service2020.axum/admin/dispute-manager/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dispute-manager/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/dispute-manager/{dispute_manager}`

`PATCH admin/dispute-manager/{dispute_manager}`


<!-- END_08f7a8b333969deff7ba6cb44ce6779e -->

<!-- START_6698697aa7cd5c439e6d42f4b80205aa -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/admin/dispute-manager/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dispute-manager/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/dispute-manager/{dispute_manager}`


<!-- END_6698697aa7cd5c439e6d42f4b80205aa -->

<!-- START_49006aa64b04ddc0a2b75e71542c1886 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/fleet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/fleet"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/fleet`


<!-- END_49006aa64b04ddc0a2b75e71542c1886 -->

<!-- START_909aa4251ee31edeefd0662ba240057f -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/fleet/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/fleet/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/fleet/create`


<!-- END_909aa4251ee31edeefd0662ba240057f -->

<!-- START_1766ebf3d80ab4e91fe5b4e1536ae5aa -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/fleet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/fleet"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/fleet`


<!-- END_1766ebf3d80ab4e91fe5b4e1536ae5aa -->

<!-- START_03e3f503566c42a8455f2f26516f60f0 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/fleet/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/fleet/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/fleet/{fleet}`


<!-- END_03e3f503566c42a8455f2f26516f60f0 -->

<!-- START_3cfe1673b8aaae5edcf2fd11a38cc526 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/fleet/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/fleet/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/fleet/{fleet}/edit`


<!-- END_3cfe1673b8aaae5edcf2fd11a38cc526 -->

<!-- START_c013817c35c4f437efc9981ff05b5735 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://service2020.axum/admin/fleet/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/fleet/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/fleet/{fleet}`

`PATCH admin/fleet/{fleet}`


<!-- END_c013817c35c4f437efc9981ff05b5735 -->

<!-- START_f7b247bc26e4e5d1975cddf16819690e -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/admin/fleet/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/fleet/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/fleet/{fleet}`


<!-- END_f7b247bc26e4e5d1975cddf16819690e -->

<!-- START_c720759f5f73daee16522c6d399363c1 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/provider" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/provider"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/provider`


<!-- END_c720759f5f73daee16522c6d399363c1 -->

<!-- START_2ed921bec3b2a4496a7d528cb5e57d38 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/provider/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/provider/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/provider/create`


<!-- END_2ed921bec3b2a4496a7d528cb5e57d38 -->

<!-- START_6cf67882e36d4237121af3cc36d22ee3 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/provider" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/provider"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/provider`


<!-- END_6cf67882e36d4237121af3cc36d22ee3 -->

<!-- START_405c2c5ee014b928e82cec3fbd53e90e -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/provider/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/provider/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/provider/{provider}`


<!-- END_405c2c5ee014b928e82cec3fbd53e90e -->

<!-- START_8f192dd720b0959fed2b4b69fbdfce09 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/provider/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/provider/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/provider/{provider}/edit`


<!-- END_8f192dd720b0959fed2b4b69fbdfce09 -->

<!-- START_1b099d5f82f93ce8ad77f9b8d33c9e5f -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://service2020.axum/admin/provider/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/provider/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/provider/{provider}`

`PATCH admin/provider/{provider}`


<!-- END_1b099d5f82f93ce8ad77f9b8d33c9e5f -->

<!-- START_05c8821646d0dfccc137efd503789ff5 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/admin/provider/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/provider/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/provider/{provider}`


<!-- END_05c8821646d0dfccc137efd503789ff5 -->

<!-- START_1c2a651ed15d579867523d8f4e64e202 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/document" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/document"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/document`


<!-- END_1c2a651ed15d579867523d8f4e64e202 -->

<!-- START_b7435ffb85891fac6b0b9111043be1ea -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/document/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/document/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/document/create`


<!-- END_b7435ffb85891fac6b0b9111043be1ea -->

<!-- START_fe8867d6269493cdf317245bf0c7fb73 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/document" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/document"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/document`


<!-- END_fe8867d6269493cdf317245bf0c7fb73 -->

<!-- START_c2d71f59ecb50ec2a0c7dae28e33f7c6 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/document/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/document/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/document/{document}`


<!-- END_c2d71f59ecb50ec2a0c7dae28e33f7c6 -->

<!-- START_6c000a4628369fd9e70114d515ac5555 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/document/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/document/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/document/{document}/edit`


<!-- END_6c000a4628369fd9e70114d515ac5555 -->

<!-- START_6018337cb777a1e95c614b1ab4c92117 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://service2020.axum/admin/document/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/document/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/document/{document}`

`PATCH admin/document/{document}`


<!-- END_6018337cb777a1e95c614b1ab4c92117 -->

<!-- START_6d788516fcc2ee0e1e734175a14833c8 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/admin/document/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/document/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/document/{document}`


<!-- END_6d788516fcc2ee0e1e734175a14833c8 -->

<!-- START_5c09bb8c17d053460303d12a479b68c7 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/service" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/service"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/service`


<!-- END_5c09bb8c17d053460303d12a479b68c7 -->

<!-- START_42d917cc73982764c16b80106320c30a -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/service/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/service/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/service/create`


<!-- END_42d917cc73982764c16b80106320c30a -->

<!-- START_fa890ff98545a6fe3db36232432b3d6d -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/service" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/service"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/service`


<!-- END_fa890ff98545a6fe3db36232432b3d6d -->

<!-- START_e881f335acf4f274cc8eaeea406a40e0 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/service/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/service/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/service/{service}`


<!-- END_e881f335acf4f274cc8eaeea406a40e0 -->

<!-- START_a25731e56088b8099ae70f6ff14ed9f1 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/service/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/service/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/service/{service}/edit`


<!-- END_a25731e56088b8099ae70f6ff14ed9f1 -->

<!-- START_5191dffae51e8711990c1ef7a6e0226d -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://service2020.axum/admin/service/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/service/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/service/{service}`

`PATCH admin/service/{service}`


<!-- END_5191dffae51e8711990c1ef7a6e0226d -->

<!-- START_aeec98c37765fbecbbb8fd6b723f6f6a -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/admin/service/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/service/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/service/{service}`


<!-- END_aeec98c37765fbecbbb8fd6b723f6f6a -->

<!-- START_a9faa3e9dc94c315c77015fdee3a2fcf -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/promocode" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/promocode"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/promocode`


<!-- END_a9faa3e9dc94c315c77015fdee3a2fcf -->

<!-- START_9dc3349984e17fc6f63e6d8b488a5704 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/promocode/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/promocode/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/promocode/create`


<!-- END_9dc3349984e17fc6f63e6d8b488a5704 -->

<!-- START_ea63b9bc4a319dfe771faeb2007d6814 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/promocode" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/promocode"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/promocode`


<!-- END_ea63b9bc4a319dfe771faeb2007d6814 -->

<!-- START_169a55d8572bb18c36e2da7d6ee432ef -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/promocode/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/promocode/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/promocode/{promocode}`


<!-- END_169a55d8572bb18c36e2da7d6ee432ef -->

<!-- START_a5f4626f4a37badf353ef19e66ae8c5d -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/promocode/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/promocode/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/promocode/{promocode}/edit`


<!-- END_a5f4626f4a37badf353ef19e66ae8c5d -->

<!-- START_22a646bdc200226d9d28d6d9286703e3 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://service2020.axum/admin/promocode/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/promocode/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/promocode/{promocode}`

`PATCH admin/promocode/{promocode}`


<!-- END_22a646bdc200226d9d28d6d9286703e3 -->

<!-- START_9ab61bf579f5155c0c8e65011223ce06 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/admin/promocode/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/promocode/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/promocode/{promocode}`


<!-- END_9ab61bf579f5155c0c8e65011223ce06 -->

<!-- START_82f68f2b49601191068d2a3e52f6bc8b -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/role" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/role"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/role`


<!-- END_82f68f2b49601191068d2a3e52f6bc8b -->

<!-- START_13259a0edd4278fbb67d6176d6efeea9 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/role/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/role/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/role/create`


<!-- END_13259a0edd4278fbb67d6176d6efeea9 -->

<!-- START_64c5083082f51f02e9c59f23549e1341 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/role" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/role"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/role`


<!-- END_64c5083082f51f02e9c59f23549e1341 -->

<!-- START_d05bc13bf03325fe0912623be4c78b25 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/role/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/role/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/role/{role}`


<!-- END_d05bc13bf03325fe0912623be4c78b25 -->

<!-- START_31bad7bd8379b0fff4dc61933b3899bf -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/role/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/role/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/role/{role}/edit`


<!-- END_31bad7bd8379b0fff4dc61933b3899bf -->

<!-- START_06c4eb4f0da941a29b2da741c4339aad -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://service2020.axum/admin/role/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/role/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/role/{role}`

`PATCH admin/role/{role}`


<!-- END_06c4eb4f0da941a29b2da741c4339aad -->

<!-- START_4acd49ff83e61527371e78c2982b2667 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/admin/role/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/role/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/role/{role}`


<!-- END_4acd49ff83e61527371e78c2982b2667 -->

<!-- START_4c7c8c31664e4515743a6d4a222a12c4 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/sub-admins" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/sub-admins"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/sub-admins`


<!-- END_4c7c8c31664e4515743a6d4a222a12c4 -->

<!-- START_6c5c7c6582f539406ece8165f1cf1a6b -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/sub-admins/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/sub-admins/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/sub-admins/create`


<!-- END_6c5c7c6582f539406ece8165f1cf1a6b -->

<!-- START_c52f4b6587da5ac1d6cf55354fa88613 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/sub-admins" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/sub-admins"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/sub-admins`


<!-- END_c52f4b6587da5ac1d6cf55354fa88613 -->

<!-- START_01190b1095e96b22b964edf6a4053898 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/sub-admins/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/sub-admins/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/sub-admins/{sub_admin}`


<!-- END_01190b1095e96b22b964edf6a4053898 -->

<!-- START_0641ec0d7bd9440a5fed9ebc7111f4e5 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/sub-admins/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/sub-admins/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/sub-admins/{sub_admin}/edit`


<!-- END_0641ec0d7bd9440a5fed9ebc7111f4e5 -->

<!-- START_889d2b6efa485fa9c6a7a1efc033f672 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://service2020.axum/admin/sub-admins/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/sub-admins/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/sub-admins/{sub_admin}`

`PATCH admin/sub-admins/{sub_admin}`


<!-- END_889d2b6efa485fa9c6a7a1efc033f672 -->

<!-- START_f3f3503f9b245a472432349717d1f00a -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/admin/sub-admins/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/sub-admins/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/sub-admins/{sub_admin}`


<!-- END_f3f3503f9b245a472432349717d1f00a -->

<!-- START_f692cdf590f822ae8656b0d028a35eb6 -->
## Provider Rating.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/review/provider" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/review/provider"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/review/provider`


<!-- END_f692cdf590f822ae8656b0d028a35eb6 -->

<!-- START_e79aaddd7cac9d178664ae41e8f124a2 -->
## admin/provider/ajax
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/provider/ajax" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/provider/ajax"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/provider/ajax`


<!-- END_e79aaddd7cac9d178664ae41e8f124a2 -->

<!-- START_791fbfef7beeb6c1a38a916630c198ca -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/provider/1/approve" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/provider/1/approve"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/provider/{id}/approve`


<!-- END_791fbfef7beeb6c1a38a916630c198ca -->

<!-- START_2f3a7d28105c6c54c8c8cb0081de4799 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/provider/1/disapprove" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/provider/1/disapprove"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/provider/{id}/disapprove`


<!-- END_2f3a7d28105c6c54c8c8cb0081de4799 -->

<!-- START_5bc54f77a19c6b91be318cbea7069e46 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/provider/1/request" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/provider/1/request"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/provider/{id}/request`


<!-- END_5bc54f77a19c6b91be318cbea7069e46 -->

<!-- START_57c527ddfb10334a3612900dd4e1f892 -->
## account statements.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/provider/1/statement" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/provider/1/statement"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/provider/{id}/statement`


<!-- END_57c527ddfb10334a3612900dd4e1f892 -->

<!-- START_1b25ee3ae0114bea89fa0c4d3e829eb8 -->
## admin/provider/{id}/password
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/provider/1/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/provider/1/password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/provider/{id}/password`


<!-- END_1b25ee3ae0114bea89fa0c4d3e829eb8 -->

<!-- START_e5c6f25a0e5031cd0fb7a01f101bd681 -->
## admin/provider/{id}/password
> Example request:

```bash
curl -X PATCH \
    "http://service2020.axum/admin/provider/1/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/provider/1/password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PATCH admin/provider/{id}/password`


<!-- END_e5c6f25a0e5031cd0fb7a01f101bd681 -->

<!-- START_eb5290d17e0b87f948a912a869de91be -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/provider/1/document" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/provider/1/document"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/provider/{provider}/document`


<!-- END_eb5290d17e0b87f948a912a869de91be -->

<!-- START_3dac8de96c80020202c769f09a1045a6 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/provider/1/document/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/provider/1/document/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/provider/{provider}/document/create`


<!-- END_3dac8de96c80020202c769f09a1045a6 -->

<!-- START_0132499885aa449ae59d00b1daab7099 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/provider/1/document" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/provider/1/document"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/provider/{provider}/document`


<!-- END_0132499885aa449ae59d00b1daab7099 -->

<!-- START_175e3b69b9741d70b875b064f295f354 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/provider/1/document/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/provider/1/document/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/provider/{provider}/document/{document}`


<!-- END_175e3b69b9741d70b875b064f295f354 -->

<!-- START_4ada795eb20a7161fc6aafbcf7be2ff5 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/provider/1/document/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/provider/1/document/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/provider/{provider}/document/{document}/edit`


<!-- END_4ada795eb20a7161fc6aafbcf7be2ff5 -->

<!-- START_19b9166ed1c850167eafbbda8a1978de -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://service2020.axum/admin/provider/1/document/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/provider/1/document/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/provider/{provider}/document/{document}`

`PATCH admin/provider/{provider}/document/{document}`


<!-- END_19b9166ed1c850167eafbbda8a1978de -->

<!-- START_0b683d384a2053a48708faae349d2152 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/admin/provider/1/document/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/provider/1/document/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/provider/{provider}/document/{document}`


<!-- END_0b683d384a2053a48708faae349d2152 -->

<!-- START_998d9c915deecfd9f938b195a2f60415 -->
## Delete the service type of the provider.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/admin/provider/1/service/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/provider/1/service/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/provider/{provider}/service/{document}`


<!-- END_998d9c915deecfd9f938b195a2f60415 -->

<!-- START_0a2ea52433d522ceda47d73590eaf884 -->
## User Rating.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/review/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/review/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/review/user`


<!-- END_0a2ea52433d522ceda47d73590eaf884 -->

<!-- START_0caac52628f6e012e5f17b3e3aa783de -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/user/1/request" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/user/1/request"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/user/{id}/request`


<!-- END_0caac52628f6e012e5f17b3e3aa783de -->

<!-- START_5c2b0593dec9db7471c6b1301cc57df7 -->
## Map of all Users and Drivers.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/map" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/map"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/map`


<!-- END_5c2b0593dec9db7471c6b1301cc57df7 -->

<!-- START_dbae554963de50a6dfcb28a58e07c249 -->
## Map of all Users and Drivers.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/map/ajax" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/map/ajax"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/map/ajax`


<!-- END_dbae554963de50a6dfcb28a58e07c249 -->

<!-- START_20cb66cafda23fe03ebd0beedfe81eb8 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/site/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/site/settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/site/settings`


<!-- END_20cb66cafda23fe03ebd0beedfe81eb8 -->

<!-- START_86463b9dff2c779186c652c5c9df267e -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/settings/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/settings/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/settings/store`


<!-- END_86463b9dff2c779186c652c5c9df267e -->

<!-- START_ac3c98d215911b2965c6cfc48a7af3df -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/settings/payment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/settings/payment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/settings/payment`


<!-- END_ac3c98d215911b2965c6cfc48a7af3df -->

<!-- START_d8be4bd811c4703abc2926f424d59dc8 -->
## Save payment related settings.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/settings/payment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/settings/payment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/settings/payment`


<!-- END_d8be4bd811c4703abc2926f424d59dc8 -->

<!-- START_2b573e6e1d43c73d7cca65562a4e5b27 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/profile`


<!-- END_2b573e6e1d43c73d7cca65562a4e5b27 -->

<!-- START_a7774baac3bba086a9ae63a8f01857cf -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/profile`


<!-- END_a7774baac3bba086a9ae63a8f01857cf -->

<!-- START_492c2995d7d9cc2dde0b692fe684d446 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/password`


<!-- END_492c2995d7d9cc2dde0b692fe684d446 -->

<!-- START_5adb058bbb4c4cd169b5eea1c01c67f0 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/password`


<!-- END_5adb058bbb4c4cd169b5eea1c01c67f0 -->

<!-- START_26ec9c40d2469c3f9589a6bb9055245e -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/payment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/payment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/payment`


<!-- END_26ec9c40d2469c3f9589a6bb9055245e -->

<!-- START_c327d64b16ec013ff49be215d394bfa8 -->
## admin/dbbackup
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/dbbackup" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dbbackup"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/dbbackup`


<!-- END_c327d64b16ec013ff49be215d394bfa8 -->

<!-- START_89b180e31d020182429c589d00b12ce1 -->
## account statements.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/statement" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/statement"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/statement`


<!-- END_89b180e31d020182429c589d00b12ce1 -->

<!-- START_4c5541f1f4c57bfc5d7e328d752cbaa3 -->
## account statements.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/statement/provider" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/statement/provider"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/statement/provider`


<!-- END_4c5541f1f4c57bfc5d7e328d752cbaa3 -->

<!-- START_1fcf5f89a73bb04c7b7ebc513d7cf95b -->
## admin/statement/user
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/statement/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/statement/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/statement/user`


<!-- END_1fcf5f89a73bb04c7b7ebc513d7cf95b -->

<!-- START_a0ae5e94a0c48f65a6109ae65d1228d6 -->
## admin/statement/fleet
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/statement/fleet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/statement/fleet"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/statement/fleet`


<!-- END_a0ae5e94a0c48f65a6109ae65d1228d6 -->

<!-- START_d4a5253300aff048573b8fcbfc808f46 -->
## account statements range.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/statement/range" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/statement/range"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/statement/range`


<!-- END_d4a5253300aff048573b8fcbfc808f46 -->

<!-- START_aa66fdf5b3ceca3e7b1dc3e81da40cec -->
## account statements today.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/statement/today" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/statement/today"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/statement/today`


<!-- END_aa66fdf5b3ceca3e7b1dc3e81da40cec -->

<!-- START_4af41921e6aba2099e444f9d30007293 -->
## account statements monthly.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/statement/monthly" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/statement/monthly"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/statement/monthly`


<!-- END_4af41921e6aba2099e444f9d30007293 -->

<!-- START_607612dad2760225987cfd75dc37f9be -->
## account statements monthly.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/statement/yearly" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/statement/yearly"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/statement/yearly`


<!-- END_607612dad2760225987cfd75dc37f9be -->

<!-- START_a85c4e8f457bc6b1d98429ab4ec7f6cd -->
## account statements.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/statement/1/statement" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/statement/1/statement"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/statement/{id}/statement`


<!-- END_a85c4e8f457bc6b1d98429ab4ec7f6cd -->

<!-- START_aad074e6f3ecdc74a04daba9409c7c41 -->
## account statements.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/statement_user/1/statement_user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/statement_user/1/statement_user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/statement_user/{id}/statement_user`


<!-- END_aad074e6f3ecdc74a04daba9409c7c41 -->

<!-- START_b5e0faa7746147e4fa33fb94b0fdc39f -->
## account statements.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/statement_fleet/1/statement_fleet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/statement_fleet/1/statement_fleet"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/statement_fleet/{id}/statement_fleet`


<!-- END_b5e0faa7746147e4fa33fb94b0fdc39f -->

<!-- START_301824478b0baab50afe0b4d733cddfb -->
## admin/transactions
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/transactions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/transactions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/transactions`


<!-- END_301824478b0baab50afe0b4d733cddfb -->

<!-- START_d184f9a835e585f1d5deee7d520247da -->
## admin/transfer/provider
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/transfer/provider" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/transfer/provider"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/transfer/provider`


<!-- END_d184f9a835e585f1d5deee7d520247da -->

<!-- START_71dddfb49afffec49d16ab02920b06cb -->
## admin/transfer/fleet
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/transfer/fleet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/transfer/fleet"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/transfer/fleet`


<!-- END_71dddfb49afffec49d16ab02920b06cb -->

<!-- START_63967f9ce43157c910de48a5ed32bf16 -->
## admin/transfer/{id}/approve
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/transfer/1/approve" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/transfer/1/approve"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/transfer/{id}/approve`


<!-- END_63967f9ce43157c910de48a5ed32bf16 -->

<!-- START_c0d09443ac13e2409d48fb49f47c3b56 -->
## admin/transfer/cancel
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/transfer/cancel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/transfer/cancel"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/transfer/cancel`


<!-- END_c0d09443ac13e2409d48fb49f47c3b56 -->

<!-- START_4b2f953bed85e02b381d7e8cc4e38eca -->
## admin/transfer/{id}/create
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/transfer/1/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/transfer/1/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/transfer/{id}/create`


<!-- END_4b2f953bed85e02b381d7e8cc4e38eca -->

<!-- START_a885d2777bd862702347ddb7ddeb74af -->
## admin/transfer/search
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/transfer/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/transfer/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/transfer/search`


<!-- END_a885d2777bd862702347ddb7ddeb74af -->

<!-- START_1e2b16da5bedada638fc7dd1b21605a9 -->
## admin/users/search
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/users/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/users/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/users/search`


<!-- END_1e2b16da5bedada638fc7dd1b21605a9 -->

<!-- START_cb3d0f97326090df9f9e4902a0496cfe -->
## admin/users/provider
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/users/provider" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/users/provider"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/users/provider`


<!-- END_cb3d0f97326090df9f9e4902a0496cfe -->

<!-- START_15bd9f5756c66a4fb2ad00bf69fc8f47 -->
## admin/ride/search
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/ride/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/ride/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/ride/search`


<!-- END_15bd9f5756c66a4fb2ad00bf69fc8f47 -->

<!-- START_1f45ecae20b9c6628b373203eff7723e -->
## admin/transfer/store
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/transfer/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/transfer/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/transfer/store`


<!-- END_1f45ecae20b9c6628b373203eff7723e -->

<!-- START_a4df9f92bdfbe41d3dfc224a115ce020 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/reason" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/reason"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/reason`


<!-- END_a4df9f92bdfbe41d3dfc224a115ce020 -->

<!-- START_e94523b2783ae6145247c86bd9348d7a -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/reason/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/reason/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/reason/create`


<!-- END_e94523b2783ae6145247c86bd9348d7a -->

<!-- START_d44e80c3890f68399639be5cd539402f -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/reason" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/reason"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/reason`


<!-- END_d44e80c3890f68399639be5cd539402f -->

<!-- START_e0483273e72d91c092a3160318f02e47 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/reason/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/reason/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/reason/{reason}`


<!-- END_e0483273e72d91c092a3160318f02e47 -->

<!-- START_91f4716870456d57cb158536ab6c2466 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/reason/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/reason/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/reason/{reason}/edit`


<!-- END_91f4716870456d57cb158536ab6c2466 -->

<!-- START_f92869005fa7f66c552616716b8d91ba -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://service2020.axum/admin/reason/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/reason/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/reason/{reason}`

`PATCH admin/reason/{reason}`


<!-- END_f92869005fa7f66c552616716b8d91ba -->

<!-- START_85fa589ef328f7549397aa90f6c5b860 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/admin/reason/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/reason/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/reason/{reason}`


<!-- END_85fa589ef328f7549397aa90f6c5b860 -->

<!-- START_64ed0500fcdd96296f5935a66885c4ce -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/peakhour" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/peakhour"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/peakhour`


<!-- END_64ed0500fcdd96296f5935a66885c4ce -->

<!-- START_4ad5b20efe2eeda7b0572d7051fa9596 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/peakhour/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/peakhour/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/peakhour/create`


<!-- END_4ad5b20efe2eeda7b0572d7051fa9596 -->

<!-- START_dce365c0693d0e58fbc0fdd12c990116 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/peakhour" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/peakhour"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/peakhour`


<!-- END_dce365c0693d0e58fbc0fdd12c990116 -->

<!-- START_62ea5cc57159f84bc8366528dda7c026 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/peakhour/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/peakhour/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/peakhour/{peakhour}`


<!-- END_62ea5cc57159f84bc8366528dda7c026 -->

<!-- START_3b8514c83f58710244e4c7c0a939c236 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/peakhour/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/peakhour/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/peakhour/{peakhour}/edit`


<!-- END_3b8514c83f58710244e4c7c0a939c236 -->

<!-- START_969f742ddb9431fcf200443410407682 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://service2020.axum/admin/peakhour/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/peakhour/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/peakhour/{peakhour}`

`PATCH admin/peakhour/{peakhour}`


<!-- END_969f742ddb9431fcf200443410407682 -->

<!-- START_6b513a1d350f83dc9206999aed5cb15e -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/admin/peakhour/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/peakhour/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/peakhour/{peakhour}`


<!-- END_6b513a1d350f83dc9206999aed5cb15e -->

<!-- START_045f587d322e43363dad28d170a7a29f -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/dispute" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dispute"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/dispute`


<!-- END_045f587d322e43363dad28d170a7a29f -->

<!-- START_c8534e2e462968cf67ae260fe26d0e96 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/dispute/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dispute/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/dispute/create`


<!-- END_c8534e2e462968cf67ae260fe26d0e96 -->

<!-- START_610f8a6b9f2357f38e57af00945b462b -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/dispute" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dispute"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/dispute`


<!-- END_610f8a6b9f2357f38e57af00945b462b -->

<!-- START_49b7b880f64feccc9abe04e7e6601552 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/dispute/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dispute/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/dispute/{dispute}`


<!-- END_49b7b880f64feccc9abe04e7e6601552 -->

<!-- START_5aa0a3602c769dd40838deac067460d5 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/dispute/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dispute/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/dispute/{dispute}/edit`


<!-- END_5aa0a3602c769dd40838deac067460d5 -->

<!-- START_37f4440a332f9dc0051830a0ed8d6219 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://service2020.axum/admin/dispute/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dispute/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/dispute/{dispute}`

`PATCH admin/dispute/{dispute}`


<!-- END_37f4440a332f9dc0051830a0ed8d6219 -->

<!-- START_9f1262d1550932913a413950fb960313 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/admin/dispute/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/dispute/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/dispute/{dispute}`


<!-- END_9f1262d1550932913a413950fb960313 -->

<!-- START_854d9ac04512264ad0bbe0ffa73d8052 -->
## admin/disputeusers
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/disputeusers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/disputeusers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/disputeusers`


<!-- END_854d9ac04512264ad0bbe0ffa73d8052 -->

<!-- START_6f403662c81676287151fc0f6c616487 -->
## admin/disputelist
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/disputelist" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/disputelist"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/disputelist`


<!-- END_6f403662c81676287151fc0f6c616487 -->

<!-- START_a7e0ec3ae8b70e653d62991463c37bdc -->
## admin/disputeuserstore
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/disputeuserstore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/disputeuserstore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/disputeuserstore`


<!-- END_a7e0ec3ae8b70e653d62991463c37bdc -->

<!-- START_544950878da8f9dabffd59ff15900b4d -->
## admin/disputeuserupdate{id}
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/disputeuserupdate1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/disputeuserupdate1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/disputeuserupdate{id}`


<!-- END_544950878da8f9dabffd59ff15900b4d -->

<!-- START_b63870d876830d87fc855fa090125978 -->
## admin/disputeusercreate
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/disputeusercreate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/disputeusercreate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/disputeusercreate`


<!-- END_b63870d876830d87fc855fa090125978 -->

<!-- START_27ea31a9a0947010e2dacbcd3395e6a0 -->
## admin/disputeuseredit/{id}
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/disputeuseredit/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/disputeuseredit/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/disputeuseredit/{id}`


<!-- END_27ea31a9a0947010e2dacbcd3395e6a0 -->

<!-- START_c9cad43edb5d718f43e62bb4e0b1548e -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/notification" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/notification"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/notification`


<!-- END_c9cad43edb5d718f43e62bb4e0b1548e -->

<!-- START_cd3387626772ad83867a0e8684fe973d -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/notification/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/notification/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/notification/create`


<!-- END_cd3387626772ad83867a0e8684fe973d -->

<!-- START_388e93676fa927010234e3acb825a0d0 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/notification" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/notification"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/notification`


<!-- END_388e93676fa927010234e3acb825a0d0 -->

<!-- START_356b33e1b4918012dff5b327af70860c -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/notification/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/notification/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/notification/{notification}`


<!-- END_356b33e1b4918012dff5b327af70860c -->

<!-- START_ea3e5740f2994cbea417718075467c90 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/notification/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/notification/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/notification/{notification}/edit`


<!-- END_ea3e5740f2994cbea417718075467c90 -->

<!-- START_c774785603488663fe5e7750424538b4 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://service2020.axum/admin/notification/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/notification/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/notification/{notification}`

`PATCH admin/notification/{notification}`


<!-- END_c774785603488663fe5e7750424538b4 -->

<!-- START_3908d09bf3b78d4ee7f115c17c97f79d -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/admin/notification/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/notification/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/notification/{notification}`


<!-- END_3908d09bf3b78d4ee7f115c17c97f79d -->

<!-- START_4f3b9a8c11310c472d09ee8a606dea4b -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/lostitem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/lostitem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/lostitem`


<!-- END_4f3b9a8c11310c472d09ee8a606dea4b -->

<!-- START_7bb0e6e13ea768edda48815dc5b1efb1 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/lostitem/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/lostitem/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/lostitem/create`


<!-- END_7bb0e6e13ea768edda48815dc5b1efb1 -->

<!-- START_2984c5274d95403b57e3d2bdb02953ac -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/lostitem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/lostitem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/lostitem`


<!-- END_2984c5274d95403b57e3d2bdb02953ac -->

<!-- START_19befb8c5d89f9b3dedef1ccec7c423c -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/lostitem/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/lostitem/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/lostitem/{lostitem}`


<!-- END_19befb8c5d89f9b3dedef1ccec7c423c -->

<!-- START_27561cb47ce37713fdbef5c5a96fb717 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/lostitem/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/lostitem/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/lostitem/{lostitem}/edit`


<!-- END_27561cb47ce37713fdbef5c5a96fb717 -->

<!-- START_d1e4b8e55caaa593a08cfe9c70251548 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://service2020.axum/admin/lostitem/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/lostitem/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/lostitem/{lostitem}`

`PATCH admin/lostitem/{lostitem}`


<!-- END_d1e4b8e55caaa593a08cfe9c70251548 -->

<!-- START_cda9492689e5bcfba4cbf06517a97de5 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/admin/lostitem/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/lostitem/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/lostitem/{lostitem}`


<!-- END_cda9492689e5bcfba4cbf06517a97de5 -->

<!-- START_14026e0701220e6dc66a1fc9867afd20 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/help" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/help"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/help`


<!-- END_14026e0701220e6dc66a1fc9867afd20 -->

<!-- START_96ad86c1c1dcd17fde4565ad7f5782fb -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/send/push" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/send/push"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/send/push`


<!-- END_96ad86c1c1dcd17fde4565ad7f5782fb -->

<!-- START_1d4dd32cac48dd4ec5eb87e729f90fbf -->
## pages.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/send/push" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/send/push"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/send/push`


<!-- END_1d4dd32cac48dd4ec5eb87e729f90fbf -->

<!-- START_2b8d58f02e5e057ffba2714632ecd581 -->
## privacy.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/pages" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/pages"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/pages`


<!-- END_2b8d58f02e5e057ffba2714632ecd581 -->

<!-- START_0ca67d533bf3350a25d26582ab610e2a -->
## pages.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/pages" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/pages"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/pages`


<!-- END_0ca67d533bf3350a25d26582ab610e2a -->

<!-- START_bae1bf66701090ad6bb90edbee8c91f0 -->
## admin/pages/search/{types}
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/pages/search/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/pages/search/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/pages/search/{types}`


<!-- END_bae1bf66701090ad6bb90edbee8c91f0 -->

<!-- START_9718a72759da5bafad6bb462bbea52ca -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/requests" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/requests"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/requests`


<!-- END_9718a72759da5bafad6bb462bbea52ca -->

<!-- START_001202690ab3bdbe53a24f63881d5482 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/requests/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/requests/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/requests/create`


<!-- END_001202690ab3bdbe53a24f63881d5482 -->

<!-- START_775ba3fdae29588ec6f304f821fe50bc -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/requests" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/requests"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/requests`


<!-- END_775ba3fdae29588ec6f304f821fe50bc -->

<!-- START_242339fb1a0abc69378eb107d0d1d00a -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/requests/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/requests/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/requests/{request}`


<!-- END_242339fb1a0abc69378eb107d0d1d00a -->

<!-- START_f3cb01c9caf494e3fff6b658f905939b -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/requests/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/requests/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/requests/{request}/edit`


<!-- END_f3cb01c9caf494e3fff6b658f905939b -->

<!-- START_2d519099805a2ba4b32cdf7963b3bc78 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://service2020.axum/admin/requests/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/requests/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/requests/{request}`

`PATCH admin/requests/{request}`


<!-- END_2d519099805a2ba4b32cdf7963b3bc78 -->

<!-- START_a01079abfccf95ff849c16d94eb96095 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/admin/requests/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/requests/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/requests/{request}`


<!-- END_a01079abfccf95ff849c16d94eb96095 -->

<!-- START_d18aa43c248382d38e880443f303a58c -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/scheduled" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/scheduled"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/scheduled`


<!-- END_d18aa43c248382d38e880443f303a58c -->

<!-- START_20e93fa556f29ae9320ad1d47cfa40cd -->
## Testing page for push notifications.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/admin/push" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/push"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET admin/push`


<!-- END_20e93fa556f29ae9320ad1d47cfa40cd -->

<!-- START_a487681a60b0535698cdbf182343859c -->
## Testing page for push notifications.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/admin/push" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/admin/push"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/push`


<!-- END_a487681a60b0535698cdbf182343859c -->

<!-- START_011afb1104dd22b9558c941102500ff2 -->
## api/provider/settings
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/provider/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "serviceTypes": [
        {
            "id": 1,
            "name": "Electrician"
        },
        {
            "id": 2,
            "name": "Plumbing"
        },
        {
            "id": 3,
            "name": "Carpenter"
        },
        {
            "id": 4,
            "name": "Mechanic"
        }
    ],
    "referral": {
        "referral": "0",
        "count": "30",
        "amount": "30",
        "ride_otp": 0
    }
}
```

### HTTP Request
`GET api/provider/settings`


<!-- END_011afb1104dd22b9558c941102500ff2 -->

<!-- START_cf84d2d4093f4d29b6f0520722167a0b -->
## Show the application dashboard.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/register`


<!-- END_cf84d2d4093f4d29b6f0520722167a0b -->

<!-- START_db35160c581ae173900943418d12d3d6 -->
## Show the application dashboard.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/oauth/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/oauth/token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/oauth/token`


<!-- END_db35160c581ae173900943418d12d3d6 -->

<!-- START_de228963200550b0b6bf25bcec56ef1b -->
## Show the application dashboard.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/logout`


<!-- END_de228963200550b0b6bf25bcec56ef1b -->

<!-- START_51471394fb60e7cc5e79e7b261fe54f8 -->
## Show the email availability.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/verify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/verify"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/verify`


<!-- END_51471394fb60e7cc5e79e7b261fe54f8 -->

<!-- START_09e180415d21cf8e6957168f42ee4533 -->
## Show the application dashboard.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/auth/facebook" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/auth/facebook"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/auth/facebook`


<!-- END_09e180415d21cf8e6957168f42ee4533 -->

<!-- START_419b6a623528e350d1c92cf93ad1d51a -->
## Show the application dashboard.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/auth/google" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/auth/google"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/auth/google`


<!-- END_419b6a623528e350d1c92cf93ad1d51a -->

<!-- START_889578a6daa88af478685189563f77b2 -->
## Forgot Password.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/forgot/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/forgot/password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/forgot/password`


<!-- END_889578a6daa88af478685189563f77b2 -->

<!-- START_8150a39e52c3fda14ee3f4e1b91f329f -->
## Reset Password.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/reset/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/reset/password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/reset/password`


<!-- END_8150a39e52c3fda14ee3f4e1b91f329f -->

<!-- START_8bdbe540cd085e363e7af878db950ad4 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/provider/refresh/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/refresh/token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "error": "A token is required"
}
```

### HTTP Request
`GET api/provider/refresh/token`


<!-- END_8bdbe540cd085e363e7af878db950ad4 -->

<!-- START_48599d115963d5376604f0bd4c391078 -->
## api/provider/update-location
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/update-location" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/update-location"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/update-location`


<!-- END_48599d115963d5376604f0bd4c391078 -->

<!-- START_7df6bbb9b435f7a2cb2a512138c1f462 -->
## api/provider/get-location
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/provider/get-location" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/get-location"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/provider/get-location`


<!-- END_7df6bbb9b435f7a2cb2a512138c1f462 -->

<!-- START_e23867ec932b2dd1b83ef10adc399ab7 -->
## api/provider/remove-location
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/provider/remove-location" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/remove-location"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/provider/remove-location`


<!-- END_e23867ec932b2dd1b83ef10adc399ab7 -->

<!-- START_7e15adbf0cad826a07216593057f2c56 -->
## payment for user.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/payment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/payment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/payment`


<!-- END_7e15adbf0cad826a07216593057f2c56 -->

<!-- START_705dcda1c36d51a011b1b799b5008727 -->
## add wallet money for user.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/add/money" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/add/money"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/add/money`


<!-- END_705dcda1c36d51a011b1b799b5008727 -->

<!-- START_ed2dc67979d8e4896fe8b4fdbc544b47 -->
## api/provider/payment-log
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/payment-log" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/payment-log"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/payment-log`


<!-- END_ed2dc67979d8e4896fe8b4fdbc544b47 -->

<!-- START_02263ebd757fc56873cdca7f0f9c7d5e -->
## api/provider/braintree/token
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/provider/braintree/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/braintree/token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (400):

```json
{
    "error": "token_absent"
}
```

### HTTP Request
`GET api/provider/braintree/token`


<!-- END_02263ebd757fc56873cdca7f0f9c7d5e -->

<!-- START_f01c5df3d63f7c0cca9382acaab82cca -->
## api/provider/payu/response
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/payu/response" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/payu/response"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/payu/response`


<!-- END_f01c5df3d63f7c0cca9382acaab82cca -->

<!-- START_9e23dbd6cd2be5acd6d3d3b9292ce450 -->
## api/provider/payu/failure
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/payu/failure" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/payu/failure"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/payu/failure`


<!-- END_9e23dbd6cd2be5acd6d3d3b9292ce450 -->

<!-- START_aea04b26782965fed27c546849570013 -->
## api/provider/payment/success
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/provider/payment/success" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/payment/success"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (400):

```json
{
    "error": "token_absent"
}
```

### HTTP Request
`GET api/provider/payment/success`


<!-- END_aea04b26782965fed27c546849570013 -->

<!-- START_a9b9c8bccd4f3ac28ce1365aed137fe1 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/provider/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (400):

```json
{
    "error": "token_absent"
}
```

### HTTP Request
`GET api/provider/profile`


<!-- END_a9b9c8bccd4f3ac28ce1365aed137fe1 -->

<!-- START_b0166208d5900bfa4c0d68b4da8597fc -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/profile`


<!-- END_b0166208d5900bfa4c0d68b4da8597fc -->

<!-- START_4490c826c1b2e757fce206524b389b84 -->
## Update password of the provider.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/profile/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/profile/password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/profile/password`


<!-- END_4490c826c1b2e757fce206524b389b84 -->

<!-- START_a2e9c302b27e455fdc4a7ed7647168af -->
## Update latitude and longitude of the user.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/profile/location" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/profile/location"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/profile/location`


<!-- END_a2e9c302b27e455fdc4a7ed7647168af -->

<!-- START_3fc9e17a8c8e728456548f6699f6c440 -->
## api/provider/profile/language
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/profile/language" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/profile/language"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/profile/language`


<!-- END_3fc9e17a8c8e728456548f6699f6c440 -->

<!-- START_b9c376bdebdae861434127e4734e8eb9 -->
## Toggle service availability of the provider.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/profile/available" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/profile/available"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/profile/available`


<!-- END_b9c376bdebdae861434127e4734e8eb9 -->

<!-- START_5e282a7ca371200420971e5d5794494c -->
## api/provider/profile/documents
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/provider/profile/documents" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/profile/documents"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (400):

```json
{
    "error": "token_absent"
}
```

### HTTP Request
`GET api/provider/profile/documents`


<!-- END_5e282a7ca371200420971e5d5794494c -->

<!-- START_808087b327f37496b86313368a35859e -->
## api/provider/profile/documents/store
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/profile/documents/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/profile/documents/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/profile/documents/store`


<!-- END_808087b327f37496b86313368a35859e -->

<!-- START_917b67ce80db365218e132feeaed9a67 -->
## api/provider/profile/details
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/profile/details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/profile/details"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/profile/details`


<!-- END_917b67ce80db365218e132feeaed9a67 -->

<!-- START_679005f687d016cf362723bf88790179 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/provider/providercard" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/providercard"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (400):

```json
{
    "error": "token_absent"
}
```

### HTTP Request
`GET api/provider/providercard`


<!-- END_679005f687d016cf362723bf88790179 -->

<!-- START_b77819f05d0a6784b4af47b3d5de3beb -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/provider/providercard/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/providercard/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (400):

```json
{
    "error": "token_absent"
}
```

### HTTP Request
`GET api/provider/providercard/create`


<!-- END_b77819f05d0a6784b4af47b3d5de3beb -->

<!-- START_011531b3c7e6517766fbbab8a91b0a45 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/providercard" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/providercard"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/providercard`


<!-- END_011531b3c7e6517766fbbab8a91b0a45 -->

<!-- START_a16627e81b2e8d203fbc2f67181e6d4b -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/provider/providercard/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/providercard/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (400):

```json
{
    "error": "token_absent"
}
```

### HTTP Request
`GET api/provider/providercard/{providercard}`


<!-- END_a16627e81b2e8d203fbc2f67181e6d4b -->

<!-- START_4dc2c031de74b948805480bbe0d29bb2 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/provider/providercard/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/providercard/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (400):

```json
{
    "error": "token_absent"
}
```

### HTTP Request
`GET api/provider/providercard/{providercard}/edit`


<!-- END_4dc2c031de74b948805480bbe0d29bb2 -->

<!-- START_0f1a98ce56b4509ce50be109bad4127c -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://service2020.axum/api/provider/providercard/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/providercard/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/provider/providercard/{providercard}`

`PATCH api/provider/providercard/{providercard}`


<!-- END_0f1a98ce56b4509ce50be109bad4127c -->

<!-- START_ddefeeb3cd4714eca00c6ab2677f47f6 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/api/provider/providercard/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/providercard/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/provider/providercard/{providercard}`


<!-- END_ddefeeb3cd4714eca00c6ab2677f47f6 -->

<!-- START_e89078cbbba65c055e322e3c47d23442 -->
## api/provider/chat
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/chat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/chat"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/chat`


<!-- END_e89078cbbba65c055e322e3c47d23442 -->

<!-- START_e44f316aceb06ecd224da1639860a2f5 -->
## Show providers daily target.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/provider/target" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/target"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (400):

```json
{
    "error": "token_absent"
}
```

### HTTP Request
`GET api/provider/target`


<!-- END_e44f316aceb06ecd224da1639860a2f5 -->

<!-- START_7125fb1e3be9f4633b7051981f6ac54b -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/provider/trip" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/trip"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (400):

```json
{
    "error": "token_absent"
}
```

### HTTP Request
`GET api/provider/trip`


<!-- END_7125fb1e3be9f4633b7051981f6ac54b -->

<!-- START_de30752dd39b0a0f6b8601eb85ea012c -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://service2020.axum/api/provider/trip/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/trip/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/provider/trip/{trip}`

`PATCH api/provider/trip/{trip}`


<!-- END_de30752dd39b0a0f6b8601eb85ea012c -->

<!-- START_90d4755ee7920658821be27af4f094c8 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://service2020.axum/api/provider/trip/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/trip/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/provider/trip/{trip}`


<!-- END_90d4755ee7920658821be27af4f094c8 -->

<!-- START_c670bda9a9faf260c8de4eedd8e6fd04 -->
## Cancel given request.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/cancel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/cancel"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/cancel`


<!-- END_c670bda9a9faf260c8de4eedd8e6fd04 -->

<!-- START_80f1243447249c765a0789882de5e05d -->
## Get the trip history details of the provider

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/summary" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/summary"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/summary`


<!-- END_80f1243447249c765a0789882de5e05d -->

<!-- START_930b8499e5e5ee2d50e74b5c7d615a61 -->
## help Details.

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/provider/help" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/help"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (400):

```json
{
    "error": "token_absent"
}
```

### HTTP Request
`GET api/provider/help`


<!-- END_930b8499e5e5ee2d50e74b5c7d615a61 -->

<!-- START_ba4e8854cad0c5bba0645769b6417b6a -->
## api/provider/wallettransaction
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/provider/wallettransaction" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/wallettransaction"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (400):

```json
{
    "error": "token_absent"
}
```

### HTTP Request
`GET api/provider/wallettransaction`


<!-- END_ba4e8854cad0c5bba0645769b6417b6a -->

<!-- START_84c563eb30ef1cb56ac2fc4bfcbc030e -->
## api/provider/wallettransaction/details
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/provider/wallettransaction/details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/wallettransaction/details"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (400):

```json
{
    "error": "token_absent"
}
```

### HTTP Request
`GET api/provider/wallettransaction/details`


<!-- END_84c563eb30ef1cb56ac2fc4bfcbc030e -->

<!-- START_8559c2554fdcd3f67971db016eb8068d -->
## api/provider/transferlist
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/provider/transferlist" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/transferlist"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (400):

```json
{
    "error": "token_absent"
}
```

### HTTP Request
`GET api/provider/transferlist`


<!-- END_8559c2554fdcd3f67971db016eb8068d -->

<!-- START_157ae8874f06d87428b3cbf2f2e1e129 -->
## api/provider/requestamount
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/requestamount" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/requestamount"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/requestamount`


<!-- END_157ae8874f06d87428b3cbf2f2e1e129 -->

<!-- START_8c8c41bd3bec06f1709dc1f059006ece -->
## api/provider/requestcancel
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/provider/requestcancel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/requestcancel"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (400):

```json
{
    "error": "token_absent"
}
```

### HTTP Request
`GET api/provider/requestcancel`


<!-- END_8c8c41bd3bec06f1709dc1f059006ece -->

<!-- START_31a9550247f634a09f99f933e87fa0ef -->
## api/provider/waiting
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/waiting" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/waiting"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/waiting`


<!-- END_31a9550247f634a09f99f933e87fa0ef -->

<!-- START_91cf2e33164a1a926b413eb6b11be30d -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/trip/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/trip/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/trip/{id}`


<!-- END_91cf2e33164a1a926b413eb6b11be30d -->

<!-- START_5e4c28049b49d9d93c3f3e2cc0da06fa -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/trip/1/rate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/trip/1/rate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/trip/{id}/rate`


<!-- END_5e4c28049b49d9d93c3f3e2cc0da06fa -->

<!-- START_6e11249bd4d265e18b97a175a060d4b7 -->
## Calculate distance between two coordinates.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/trip/1/calculate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/trip/1/calculate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/trip/{id}/calculate`


<!-- END_6e11249bd4d265e18b97a175a060d4b7 -->

<!-- START_f2cfaaef059049ef49afadf8e979bb0e -->
## Get the trip history of the provider

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/requests/rides" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/requests/rides"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/requests/rides`


<!-- END_f2cfaaef059049ef49afadf8e979bb0e -->

<!-- START_97c95626c7afceeec5be1979ce122348 -->
## api/provider/requests/instant/ride
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/requests/instant/ride" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/requests/instant/ride"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/requests/instant/ride`


<!-- END_97c95626c7afceeec5be1979ce122348 -->

<!-- START_afa0b969f81921b87fb5de1dbdbfe381 -->
## Get the trip history of the provider

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/provider/requests/upcoming" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/requests/upcoming"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (400):

```json
{
    "error": "token_absent"
}
```

### HTTP Request
`GET api/provider/requests/upcoming`


<!-- END_afa0b969f81921b87fb5de1dbdbfe381 -->

<!-- START_0ea0d7d0092a3cdb2c3268af73b9e3f7 -->
## Get the trip history of the provider

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/provider/requests/history" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/requests/history"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (400):

```json
{
    "error": "token_absent"
}
```

### HTTP Request
`GET api/provider/requests/history`


<!-- END_0ea0d7d0092a3cdb2c3268af73b9e3f7 -->

<!-- START_e3c492c7748358cab5a8b67e157f57ad -->
## Get the trip history details of the provider

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/provider/requests/history/details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/requests/history/details"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (400):

```json
{
    "error": "token_absent"
}
```

### HTTP Request
`GET api/provider/requests/history/details`


<!-- END_e3c492c7748358cab5a8b67e157f57ad -->

<!-- START_bed3ca3871c3f7f87a218b2ec1d6e4cc -->
## Get the trip history details of the provider

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/provider/requests/upcoming/details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/requests/upcoming/details"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (400):

```json
{
    "error": "token_absent"
}
```

### HTTP Request
`GET api/provider/requests/upcoming/details`


<!-- END_bed3ca3871c3f7f87a218b2ec1d6e4cc -->

<!-- START_239430e69b39a5157cb01c908ec7e9c3 -->
## api/provider/test/push
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/test/push" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/test/push"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/test/push`


<!-- END_239430e69b39a5157cb01c908ec7e9c3 -->

<!-- START_80743179cab80137dc942e3c6d5ad712 -->
## api/provider/reasons
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/provider/reasons" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/reasons"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (400):

```json
{
    "error": "token_absent"
}
```

### HTTP Request
`GET api/provider/reasons`


<!-- END_80743179cab80137dc942e3c6d5ad712 -->

<!-- START_18649996ec76fae8a57150b95ffb9bbf -->
## get notifications for respcted types

> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/api/provider/notifications/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/notifications/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (400):

```json
{
    "error": "token_absent"
}
```

### HTTP Request
`GET api/provider/notifications/{type}`


<!-- END_18649996ec76fae8a57150b95ffb9bbf -->

<!-- START_da602074bea7bd1d1eaf1c0db40dfb7d -->
## api/provider/dispute-list
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/dispute-list" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/dispute-list"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/dispute-list`


<!-- END_da602074bea7bd1d1eaf1c0db40dfb7d -->

<!-- START_55db05a3a0cc60623db1bcbebff08f13 -->
## api/provider/dispute
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/dispute" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/dispute"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/dispute`


<!-- END_55db05a3a0cc60623db1bcbebff08f13 -->

<!-- START_9495274e9f8c8516447022a6e3489d83 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/drop-item" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/drop-item"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/drop-item`


<!-- END_9495274e9f8c8516447022a6e3489d83 -->

<!-- START_6d4dd2efabd84bc07ee4ab45ef13c24b -->
## api/provider/verify-credentials
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/api/provider/verify-credentials" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/api/provider/verify-credentials"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/provider/verify-credentials`


<!-- END_6d4dd2efabd84bc07ee4ab45ef13c24b -->

<!-- START_e0cb4bc250fb5ceb0876fc24f23edeef -->
## save-subscription/{id}/{guard}
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/save-subscription/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/save-subscription/1/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST save-subscription/{id}/{guard}`


<!-- END_e0cb4bc250fb5ceb0876fc24f23edeef -->

<!-- START_4de55880a046379a56c33923b1eab58b -->
## provider/payment/response
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/provider/payment/response" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/payment/response"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET provider/payment/response`


<!-- END_4de55880a046379a56c33923b1eab58b -->

<!-- START_e76ed96c2908a9e00a0953356a982a82 -->
## provider/payment/failure
> Example request:

```bash
curl -X GET \
    -G "http://service2020.axum/provider/payment/failure" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/payment/failure"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET provider/payment/failure`


<!-- END_e76ed96c2908a9e00a0953356a982a82 -->

<!-- START_152d402b31ee8ad92890d23591818251 -->
## provider/payment/response
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/provider/payment/response" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/payment/response"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST provider/payment/response`


<!-- END_152d402b31ee8ad92890d23591818251 -->

<!-- START_5b8bd07310913ccbc2ae227dc62718e3 -->
## provider/payment/failure
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/provider/payment/failure" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/payment/failure"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST provider/payment/failure`


<!-- END_5b8bd07310913ccbc2ae227dc62718e3 -->

<!-- START_a7d2b9d95a3f61d8e5669d50dd45562f -->
## provider/paytm/response
> Example request:

```bash
curl -X POST \
    "http://service2020.axum/provider/paytm/response" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://service2020.axum/provider/paytm/response"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST provider/paytm/response`


<!-- END_a7d2b9d95a3f61d8e5669d50dd45562f -->


