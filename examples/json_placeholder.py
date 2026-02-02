from random import randint

from matplotlib import pyplot as plt
from matplotlib import image as mpimg
import requests

# WWW: https://jsonplaceholder.typicode.com/
# Look into the 'Resources' section

PHOTOS_URL = "https://jsonplaceholder.typicode.com/photos"
PHOTOS_DATA = requests.get(PHOTOS_URL).json()

# There are 5000 photos on the page, but we'll pick just single random item
random_photo_number = randint(0, 4999)

if __name__ == '__main__':
    photo = PHOTOS_DATA[random_photo_number]

    # photo details
    for key, value in photo.items():
        print(f"{key}: {value}")

    # saving image
    photo_response = requests.get(photo["url"])
    with open("photo.png", "wb") as f:
        f.write(photo_response.content)

    # displaying photo
    plt.title(photo["title"])
    plt.xlabel(f"albumId: {photo['albumId']}")
    plt.ylabel(f"id: {photo['id']}")

    # It could be necessary to: pip install PyQt5
    image = mpimg.imread("photo.png")
    plt.imshow(image)
    plt.show()
