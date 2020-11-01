<p align="center">
  <img  width="170" height="100%" src="https://image.flaticon.com/icons/png/512/1878/1878474.png" alt="API"></a>
</p>

<h3 align="center">Automatic API for extracting ERP tickets</h3>

<p align="center">
  <img alt="GitHub language count" src="https://img.shields.io/github/languages/count/caioagiani/api-erp-tickets">
  <img alt="GitHub top language" src="https://img.shields.io/github/languages/top/caioagiani/api-erp-tickets">
  <img alt="GitHub repo size" src="https://img.shields.io/github/repo-size/caioagiani/api-erp-tickets">
  <img alt="GitHub last commit" src="https://img.shields.io/github/last-commit/caioagiani/api-erp-tickets">
</p>

- [x] View open tickets:

```javascript
GET /
  {
    total: 10,
    chamados: [
      {
        fila: "SUPORTE - NIVEL 1",
        value: 0,
      },
      {
        fila: "SUPORTE - BLOQUEIO / DESBLOQUEIO",
        value: 0,
      },
      {
        fila: "SUPORTE - CANCELAMENTO",
        value: 0,
      },
      {
        fila: "SUPORTE - CIRCUITO / POP",
        value: 0,
      },
      {
        fila: "SUPORTE - COORPORATIVO",
        value: 3,
      },
      {
        fila: "SUPORTE - ATIVAÇÃO",
        value: 3,
      },
      {
        fila: "SUPORTE - PRO ATIVO",
        value: 6,
      },
      {
        fila: "SUPORTE - RESIDENCIAL",
        value: 10,
      },
    ],
  };
```

## Creditos

[@caioagiani](https://www.linkedin.com/in/caioagiani/)
