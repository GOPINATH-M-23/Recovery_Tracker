Project Title: Recovery Tracker
Subtitle: A Cloud-Native, AI-Powered Post-Surgery Patient Monitoring System.
📖 The "Elevator Pitch" (Brief Description)
Recovery Tracker is a full-stack healthcare platform designed to automate the monitoring of patients during the critical 
post-operative recovery phase. By integrating React 19 with a robust PHP/PostgreSQL backend, it provides real-time vitals 
tracking, AI-driven risk assessment, and deviation analysis. The system bridges the gap between hospital discharge and full 
recovery, ensuring that any medical anomalies are instantly flagged for professional review.
 Detailed Project Overview
The platform is built on a multi-role architecture, providing tailored experiences for three key user groups:
For Patients: A personal dashboard to log daily vitals (Heart Rate, SpO2, Temperature, Pain Levels). It features a "Recovery Score" engine that visually represents their progress and identifies trends.
For Doctors: A high-fidelity clinical dashboard for real-time risk assessment. Doctors receive automated alerts when a patient’s vitals deviate from the norm and can generate AI-summarized medical reports for efficient decision-making.
For Administrators: A central management hub for user authentication, patient-to-doctor assignments, and system-wide audit logs.
🛠️ Key Technical Features
AI-Powered Deviation Engine: Automatically calculates recovery scores and identifies clinical anomalies (e.g., tachycardia, fever spikes) using predefined medical thresholds.
Dual-Database Compatibility: Supports PostgreSQL (via RENDER Cloud) and MySQL (via Local XAMPP), making it versatile for both production and development environments.
Seamless Integration: A modern React 19 frontend styled with TailwindCSS and Framer Motion for a premium, responsive, and accessible user experience.
Cloud-First Deployment: Fully automated CI/CD pipeline using GitHub Actions and Render Blueprint (render.yaml) for instant, scalable hosting.
🔬 Tech Stack Summary
Frontend: React 19, Vite, TailwindCSS, Recharts (for trend visualization).
Backend: PHP 8.x (REST API Architecture).
Database: PostgreSQL (Cloud) / MySQL (Local).
Infrastructure: Render (Cloud Hosting), GitHub Actions (CI/CD).
Authentication: JWT-based Secure Login.
