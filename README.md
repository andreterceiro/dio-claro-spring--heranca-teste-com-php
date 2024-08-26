# Geral

[Tutorial](https://pt.stackoverflow.com/questions/23/qual-%C3%A9-a-diferen%C3%A7a-entre-modificadores-public-default-protected-e-private).

[Testes semelhantes com Java](https://github.com/andreterceiro/dio-heranca).

Propositalmente estou forçando um erro. Veja o primeiro link acima. A teoria bate completamente:

- `protected`não é público. Eu não consigo chamar em uma instância. Mas se quisesse indiretamente em uma classe filha, `dentro` de um método público, funcionaria;
- Para acessar em uma instância precisa ser `público`.