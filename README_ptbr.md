# 🌌 QuantumHub

> Uma plataforma de EdTech desenvolvida para personalizar trilhas de aprendizado em tecnologia através de um motor de recomendação dinâmico.

Na velocidade em que o mercado de tecnologia evolui, encontrar o curso certo para seu nível atual e seus objetivos de carreira costuma gerar sobrecarga de informações.

O QuantumHub transforma a busca por conhecimento em uma experiência guiada. Através de um diagnóstico rápido, nossa aplicação analisa suas preferências e aponta a trilha ideal para o seu próximo passo profissional.

## ✨ Principais Funcionalidades

- 🔒 **Autenticação Segura:** Proteção de credenciais via algoritmo `BCRYPT` (`password_hash`).
- 🎯 **Motor de Recomendação:** Algoritmo dinâmico que analisa a área de interesse e nível de conhecimento.
- 📱 **Interface Responsiva:** Design guiado por conceitos de *Mobile-First*, garantindo usabilidade em qualquer dispositivo.
- 🗄️ **Persistência de Dados Relacional:** Estruturação em MySQL para gerenciamento eficiente de perfis e diagnósticos.

## 📂 Visão Geral da Estrutura

- `config/`: Camada de Banco de Dados e Variáveis ​​Globais.
- `pages/`: Interfaces e visões do usuário.
- `recomendacao.php`: Motor com a lógica de decisão e filtros.
- `styles/`: CSS modularizado (`reset.css`, `global.css`, `home.css`).

## ⚙️ Como funciona
1. O usuário cria sua conta de forma segura.
2. Preenche um formulário de diagnóstico (área de interesse, nível e objetivos).
3. O motor de recomendação em PHP filtra a matriz de cursos e entrega a melhor trilha.

## 🛠️ Tecnologias

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)

## 📖 Mais Informações
|Imagens do Sistema||
|-|-|
| Tela inicial | Formulário |
| ![](./docs_assets/quantumhub_screenshot1.png) | ![](./docs_assets/quantumhub_screenshot2.png)|
| Página de cursos ||
| ![](./docs_assets/quantumhub_screenshot3.png) ||

---

*Escola e Faculdade SENAI 106 "Mariano Ferraz" | Análise e Desenvolvimento de Sistemas (2025)*
