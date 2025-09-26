# SearchOut [DEPRECATED]🚀

A personalized search aggregator that lets you quickly search across multiple platforms! SearchOut helps you customize your search experience by allowing you to add and manage your favorite search engines, making it faster and easier to find exactly what you're looking for. This version of SearchOut is not updated and forgotten inside the space-time. Other SearchOut-based projects can be found on my repos, but the actual back-end is not uploaded publicly (yet)!

## ✨ Key Features

*   **Custom Search Engines**: Add, edit, and manage your preferred search engines to tailor your search experience. ⚙️
*   **Multi-Platform Search**: Quickly search across various platforms like Google, YouTube, Wikipedia, and more. 🌐
*   **Search Widget**: Embed a customizable search widget on your website for easy access to SearchOut's powerful search capabilities. 💻
*   **Language Support**: Available in both English and Spanish, catering to a wider audience. 🌍
*   **Theme Switching**: Toggle between light and dark themes for comfortable browsing. 🌗
*   **Search Suggestions**: Get real-time search suggestions as you type, making your search faster and more efficient. 💡
*   **Store/Marketplace**: Discover and add custom search engines created by the community. 🛍️

## 🛠️ Tech Stack

*   **Frontend**:
    *   HTML
    *   CSS
    *   JavaScript
    *   Bootstrap 4.6.0
    *   Bootstrap Icons 1.5.0
    *   jQuery 3.5.1
*   **Backend**:
    *   PHP
*   **Other**:
    *   `localStorage` (for storing user-defined search engines)

## 📦 Getting Started

Follow these steps to set up SearchOut locally:

### Prerequisites

*   PHP environment (e.g., XAMPP, WAMP, or MAMP)
*   Web server (e.g., Apache)
*   Web browser

### Installation

1.  Clone the repository
2.  Place the project directory in your web server's document root (e.g., `htdocs` in XAMPP).
3.  Ensure that your PHP environment is properly configured.

### Running Locally

1.  Start your web server (e.g., Apache).
2.  Open your web browser and navigate to the project directory (e.g., `http://localhost/SearchOut/`).
3.  You should now be able to access the SearchOut application.

## 📂 Project Structure

```
SearchOut/
├── about/
│   ├── about/style.css
│   └── index.php
├── collaborators/
│   └── index.php
├── controllers/
│   └── controller.php
├── developers/
│   └── widget/
│       ├── index.php
│       └── widget.php
├── es/
│   ├── about/
│   │   └── index.php
│   ├── index.php
│   └── store/
│       └── index.php
├── index.php
├── models/
│   └── model.php
├── store/
│   └── index.php
└── views/
    └── user/
        ├── modules/
        │   ├── big-footer.php
        │   ├── footer.php
        │   ├── header.php
        │   ├── input.php
        │   ├── searcher.php
        │   └── suggestion.php
        ├── src/
        │   ├── css/
        │   │   └── style.css
        │   └── js/
        │       └── searcher.js
        └── template.php
```

## 💻 Usage

1.  **Search**: Enter your search query in the input field and press Enter or click the search button.
2.  **Select Search Engine**: Choose a search engine from the dropdown menu to specify where you want to search.
3.  **Add Custom Search Engines**: Go to the "Store" to add custom search engines.
4.  **Manage Search Engines**: Edit or delete your custom search engines in the "Store".
5.  **Switch Language**: Use the language selector to switch between English and Spanish.
6.  **Toggle Theme**: Click the theme button to switch between light and dark mode.
7.  **Embed Widget**: Developers can configure and generate code for a search widget to embed on external websites.

## 🤝 Contributing

Contributions are welcome! If you'd like to contribute to SearchOut, please follow these steps:

1.  Fork the repository.
2.  Create a new branch for your feature or bug fix.
3.  Make your changes and commit them with descriptive commit messages.
4.  Push your changes to your fork.
5.  Submit a pull request.

## 📝 License

This project is licensed under the [MIT License](LICENSE).

## 📬 Contact

If you have any questions or suggestions, feel free to contact us at [bruno08rodriguez@gmail.com](mailto:bruno08rodriguez@gmail.com).

## 💖 Thanks

Thank you for using SearchOut! We hope you find it helpful and enjoy customizing your search experience.

---
This is written by [readme.ai](https://readme-generator-phi.vercel.app/).
