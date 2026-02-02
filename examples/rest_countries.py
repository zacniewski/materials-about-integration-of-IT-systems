import requests

# WWW: https://restcountries.com/

ALL_COUNTRIES_URL = "https://restcountries.com/v3.1/all"
list_of_all_countries = requests.get(ALL_COUNTRIES_URL).json()

# Look at the names before start
all_names = [some_country["name"]["common"] for some_country in list_of_all_countries]
print(f"Available countries: \n{all_names}\n\n")


if __name__ == '__main__':
    # Get data for given country by its name
    country = "Poland"
    name_api_url = f"https://restcountries.com/v3.1/name/{country}"

    # All country data is in the list with JSON structure inside
    country_data = requests.get(name_api_url).json()

    print(f"Data for {country}")
    for key, value in country_data[0].items():
        print(f"{key}: {value}")
