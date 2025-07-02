# 💪 Smart Gym Management System

An IoT-based real-time heart rate monitoring system integrated into gym equipment to enhance user safety, training effectiveness, and operational efficiency.

---
## 📌Table Content
- [📌 Project Overview](#-project-overview)
- [🎯 Objectives](#-objectives)
- [🛠️ Technologies Used](https://github.com/Saima2647/Gym-Management-System-Integrated-with-IOT/edit/main/README.md#%EF%B8%8F-technologies-used)
- [📋 Features](#-features)
- [🧪 Testing](#-testing)
- [📈 Future Scope](#-future-scope)
- [📷 System ScreenShots](#-system-screenshots)

---

## 📌 Project Overview

Traditional gym systems lack the capability to monitor users' physical conditions in real-time. The **Smart Gym Management System** addresses this gap by embedding heart rate sensors into fitness machines and displaying real-time BPM (Beats Per Minute) on OLED displays. This provides users with instant feedback during workouts and alerts when their heart rate is outside the recommended zone. It also offers gym staff valuable insights into user health and performance.

---

## 🎯 Objectives

- **Real-time heart rate tracking** during workouts.
- **Instant alert notifications** on abnormal heart activity.
- **User-friendly interface** for monitoring and data visualization.
- **Integration with IoT cloud platform** for remote data access.
- **Agile development approach** with iterative testing and deployment.

---

## 🛠️ Technologies Used

### Hardware:
- NodeMCU ESP8266
- Heart Rate Sensor
- OLED Display
- Jumper Wires
- Breadboard

---

### Software:
- Arduino IDE
- ThingSpeak IoT Platform
- Windows 11 OS
- XAMPP (for optional data handling)

---

## 📋 Features

- ⏱️ **Live BPM Detection** using pulse sensor.
- ⚠️ **Alert Mechanism** for high (>120 BPM) or low (<40 BPM) heart rate.
- 📟 **OLED Display Output** for on-device feedback.
- 🌐 **WiFi-based Data Upload** to ThingSpeak.
- 🔄 **Agile SDLC model** with real-time updates and feedback.

---

## 🧪 Testing

| Test Case | Input            | Expected Output     | Actual Output          |
|-----------|------------------|---------------------|------------------------|
| TC1       | High Heart Rate  | Alert shown on OLED | Alert shown as expected|
| TC2       | Normal Heart Rate| BPM value shown     | BPM displayed          |
| TC3       | Low Heart Rate   | Alert shown on OLED | Alert shown as expected|

User interface testing confirms:
- ✅ Legible font size
- ✅ Appropriate text color
- ✅ Responsive OLED updates
- ✅ No visual glitches

---

## 📈 Future Scope

- 🧘‍♂️ Stress and fatigue detection
- 🧠 AI-based personal training recommendations
- 📲 Fitness tracker integration
- 🧑‍⚕️ Remote health monitoring for trainers/physicians

---

## 📷 System ScreenShots

**Home Page** 
![image](https://github.com/user-attachments/assets/2b6d72eb-061d-4b20-a2ab-f2334b68d97e)

**Dashboard** 
![image](https://github.com/user-attachments/assets/7ec2fa20-d7dc-4474-add4-48a74c1e02f7)

**Review Page** 
![image](https://github.com/user-attachments/assets/df68ce61-23f7-4d70-bb35-ee60095aface)

**Events and Gallery**
![image](https://github.com/user-attachments/assets/1c9561cf-219a-4f08-b9a6-77beaca57821)

**Trainers Page**
![image](https://github.com/user-attachments/assets/101a4b08-1f95-405c-89c8-4b06409bf94b)

**IOT Sensor** 

![image](https://github.com/user-attachments/assets/aa784715-5191-4f25-a5f3-e2b56f2cead8)

![image](https://github.com/user-attachments/assets/6226aae3-5e32-4bc9-b3e9-0dd146c1082f)

![image](https://github.com/user-attachments/assets/95a14480-4bcc-4af6-91f1-fcfeb530c26f)


