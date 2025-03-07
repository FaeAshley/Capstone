# Pinball Game Analysis Dashboard

## Overview
The **Pinball Game Analysis Dashboard** is an interactive web application that analyzes pinball tournament data. It provides insights into player rankings, game statistics, and game trends through data visualizations. Additionally, it incorporates machine learning to predict whether a game is skill-based or luck-based based on tournament results.

## Features
- **Data Retrieval & Storage:** Tournament data is retrieved using **PHP** and stored in **MySQL (PHPMyAdmin)**.
- **Interactive Dashboard:** Developed using **Streamlit**, allowing users to filter and analyze data dynamically.
- **Data Visualization:** Utilizes **Matplotlib** and **Seaborn** for histograms, bar charts, and correlation heatmaps.
- **Machine Learning Predictions:** Implements a **Random Forest Classifier** to determine if a game is primarily skill-based or luck-based.
- **User Input Functionality:** Enables users to select games, filter rankings, and generate real-time predictions.

## Technologies Used
- **Python** (Streamlit, Pandas, SQLAlchemy, Matplotlib, Seaborn, Scikit-learn)
- **PHP** (for data retrieval and storage)
- **MySQL (PHPMyAdmin)**
- **SQLAlchemy** (for database interaction in Python)
- **Scikit-learn** (for machine learning)

## Installation
### **Prerequisites**
- **Python 3.x** installed
- **MySQL** server set up with tournament data
- **PHP and PHPMyAdmin** configured for data retrieval
- Required Python packages installed:
  ```bash
  pip install streamlit pandas sqlalchemy mysql-connector-python matplotlib seaborn scikit-learn
  ```

## Usage
1. Ensure the MySQL database is running and contains the tournament data.
2. Run the Streamlit app:
   ```bash
   streamlit run app.py
   ```
3. Interact with the dashboard to:
   - View descriptive statistics and rankings.
   - Filter tournament data by game and player ranking.
   - Generate data visualizations.
   - Predict whether a game is skill-based or luck-based using the machine learning model.

## Data Structure
### **Database Schema**
- **Tables Used:**
  - `games`: Contains game details and player placements.
  - `matchplay_players`: Links players to match results.
  - `players`: Stores IFPA rankings and player information.

### **Query Used**
```sql
SELECT 
    p.ifpa_rank,
    g.opdb_name,
    mp.player_id,
    g.first AS first_place,
    g.second AS second_place,
    g.third AS third_place,
    g.fourth AS fourth_place
FROM 
    games g
JOIN 
    matchplay_players mp ON g.first = mp.player_id OR g.second = mp.player_id OR g.third = mp.player_id OR g.fourth = mp.player_id
JOIN 
    players p ON mp.ifpa_id = p.ifpa_id;
```

## Machine Learning Model
- Uses a **Random Forest Classifier** to classify games based on player placement trends.
- Encodes game names as numerical features using **Label Encoding**.
- Features used for training:
  - **IFPA Rank**
  - **Player Placement History (1st-4th place counts per game)**
  - **Game Identifier (Encoded)**
- Model evaluation includes **accuracy score, classification report, and confusion matrix**.

## Future Improvements
- Enhance data retrieval efficiency from MySQL.
- Expand visualization options.
- Improve model accuracy by incorporating additional tournament factors.
- Deploy the app for broader access.

## Author
Developed by Fae Ashley

## License
This project is licensed under the MIT License.
