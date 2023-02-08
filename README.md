<!-- ABOUT THE PROJECT -->
## About The Project
an HTTP client for making outbound HTTP requests. It uses the Guzzle library for sending HTTP requests and receiving responses. The Connector class is responsible for constructing an HTTP client with a base URI and sending requests, while the Activity class is a higher-level wrapper around the Connector class that provides convenience methods for sending various types of HTTP requests (GET, POST, PUT, DELETE). The Result and ListResult classes are used to represent the response of the HTTP requests.

### Built With
* PHP 8.0 - above

<!-- GETTING STARTED -->
## Getting Started

### Prerequisites
* [Composer](https://getcomposer.org/)
* Apache/Nginx Server
* Git

### Installation

1. Clone the repo
   ```sh
   https://github.com/jenmagato/egress.git
   ```
2. Go inside the folder
   ```sh
   cd egress
   ```
3. Run Composer Install.
   ```sh
   composer install
   ```

## Usage 
1. Go to http://localhost/egress in order to see the application running. 
   
## Folders / Important files  
- `src/Connector` - responsible for connecting to an API and sending requests
- `src/Activity` - provides a convenient interface for performing various API operations
- `src/Result` - packages API response data into a Result object
- `src/ListResult` - packages a list of Result objects into a single object
- `design` - Contains basic UML
- `index.php` - Sample basic usage of the created program

<!-- CONTACT -->
## Contact
Jenmagat04@gmail.com
