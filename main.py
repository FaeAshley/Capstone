
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC

# Path to your WebDriver (e.g., ChromeDriver)
service = Service(r'C:\Users\Fae\AppData\Local\Programs\Python\Python312\chromedriver-win64\chromedriver.exe')  # Replace with the correct path

# Initialize WebDriver (Chrome in this example)
driver = webdriver.Chrome(service=service)

# Open the webpage
driver.get("https://app.matchplay.events/tournaments/151640/matches")

# Wait for the page to fully load (adjust the waiting condition as needed)
try:
    WebDriverWait(driver, 20).until(EC.presence_of_element_located((By.XPATH, "//div[contains(@class, 'flex-1 truncate')]")))

    # Find elements containing the arena names
    matches = driver.find_elements(By.XPATH, "//div[contains(@class, 'flex-1 truncate')]")

    arena_names = []
    for match in matches:
        arena_tag = match.find_element(By.TAG_NAME, 'a')  # Adjust based on structure
        if arena_tag:
            arena_names.append(arena_tag.text.strip())

    # Print the extracted arena names
    for index, arena in enumerate(arena_names, start=1):
        print(f"Arena {index}: {arena}")

finally:
    # Close the browser
    driver.quit()

