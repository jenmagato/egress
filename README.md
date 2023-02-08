<!-- ABOUT THE PROJECT -->
## About The Project
LHTTP egress writtin in PHP

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

<!-- CONTACT -->
## Contact
Jenmagat04@gmail.com
