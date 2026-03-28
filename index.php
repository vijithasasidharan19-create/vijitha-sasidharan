<?php

if (isset($_GET['download']) && $_GET['download'] === 'resume') {
    $pdf = __DIR__ . '/Vijitha_Sasidharan_Resume.pdf';
    if (file_exists($pdf)) {
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="Vijitha_Sasidharan_Resume.pdf"');
        header('Content-Length: ' . filesize($pdf));
        header('Cache-Control: no-cache');
        readfile($pdf);
        exit;
    } else {
        http_response_code(404);
        echo 'Resume PDF not found. Please place Vijitha_Sasidharan_Resume.pdf in the same folder.';
        exit;
    }
}


$name      = "Vijitha Sasidharan";
$initials  = "VS";
$tagline   = "Java Backend Developer";
$subtitle  = "Spring Boot · Microservices · FinTech";
$email     = "vijithasasidharan19@gmail.com";
$phone     = "+91 6374540906";
$location  = "Chennai, India";
$linkedin  = "#";
$years_exp = "3+";

$summary = "Java Backend Developer with 3+ years of experience in Spring Boot microservices, RESTful API development, secure payment processing, RBAC, and deployment. Deep expertise in FinTech systems, transaction management, database optimization (MySQL/PostgreSQL), and scalable backend architecture.";

$skills = [
  ["label" => "Programming & Backend",  "tags" => ["Java", "Java 8+", "OOP", "Collections", "Multithreading", "Spring Boot", "Spring MVC", "Spring Data JPA", "Hibernate", "RESTful APIs", "Microservices"]],
  ["label" => "Frontend Integration",   "tags" => ["HTML5", "CSS3", "PHP"]],
  ["label" => "Databases",              "tags" => ["MySQL", "PostgreSQL", "SQL Queries", "Indexing", "Performance Optimization"]],
  ["label" => "Cloud & DevOps",         "tags" => ["AWS EC2", "CI/CD Jenkins","NGINX","Apache Tomcat", "Deployment", "Production Support"]],
  ["label" => "Tools",                  "tags" => ["Eclipse IDE", "VS Code", "Postman", "Swagger / OpenAPI", "FileZilla"]],
  ["label" => "Security",               "tags" => ["Spring Security", "RBAC", "Authentication", "Authorization", "Secure APIs"]],
];

$experience = [
  [
    "period"  => "Apr 2024 – Present",
    "role"    => "Full Stack Developer",
    "type"    => "Java Spring Boot & Front-end Integration",
    "company" => "V Labs & Solutions",
    "city"    => "Chennai",
    "current" => true,
    "points"  => [
      "Designed and developed scalable Java Spring Boot microservices, building 20+ secure REST APIs with transaction handling, exception management, and Swagger (OpenAPI) documentation.",
      "Implemented Spring Security with Role-Based Access Control (RBAC) and ensured secure, well-structured backend services aligned with enterprise standards.",
      "Handled application deployment and production support, monitoring live issues, fixing bugs, and maintaining stable Spring Boot applications.",
    ],
  ],
  [
    "period"  => "Feb 2022 – Mar 2023",
    "role"    => "Software Engineer",
    "type"    => "Java Spring Boot",
    "company" => "FA Software And Solutions",
    "city"    => "Chennai",
    "current" => false,
    "points"  => [
      "Developed backend modules using Java and Spring Boot with secure REST APIs.",
      "Implemented authentication, authorization, RBAC and supported AWS deployments.",
    ],
  ],
  [
    "period"  => "Jan 2021 – Oct 2021",
    "role"    => "Associate Customer Support",
    "type"    => "",
    "company" => "Tech Mahindra",
    "city"    => "",
    "current" => false,
    "points"  => [
      "Provided customer support by resolving queries and issues through timely follow-ups.",
      "Coordinated with internal teams to deliver effective and prompt solutions.",
    ],
  ],
];

$projects = [
  [
    "company" => "V Labs & Solutions",
    "items"   => [
      ["name" => "CrorePay",    "sub" => "FinTech Payment Gateway",         "desc" => "Secure payment gateway with payouts, BBPS bill payments, and high-volume transaction processing."],
      ["name" => "Cinefo",      "sub" => "NFC Call Sheet & Payment",        "desc" => "NFC attendance tracking, wage calculation, and call-sheet management for film production."],
      ["name" => "Hostelian",   "sub" => "Hostel Management System",        "desc" => "Student registration, room allocation, due tracking, and integrated payment workflows."],
      ["name" => "V++",         "sub" => "Enterprise Services Platform",    "desc" => "Subscription billing, ticketing, digital identity, meeting & certificate management."],
      ["name" => "Offman",      "sub" => "Task & Leave Management",         "desc" => "Role-based task assignment and leave approval workflows for enterprise teams."],
      ["name" => "Honey Flicks","sub" => "Movie Production Management",     "desc" => "Backend services for production tracking and call-sheet management."],
    ],
  ],
  [
    "company" => "FA Software And Solutions",
    "items"   => [
      ["name" => "Whistle Blow",     "sub" => "Anonymous Reporting Platform", "desc" => "Secure anonymous reporting platform with RBAC and privacy-first architecture."],
      ["name" => "Vendor Management","sub" => "ILM System",                   "desc" => "Vendor onboarding, approval workflows, PDF generation, and automated email alerts."],
    ],
  ],
];

$education = [
  ["degree" => "BSc Computer Science", "school" => "Valliammal College for Women, Chennai", "period" => "Jun 2018 – Apr 2021", "grade" => "75%"],
];
$certs = [
  ["title" => "Mastering of Software (Java)", "issuer" => "Blue Ball Technologies, Chennai", "period" => "Oct – Nov 2021"],
];
?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($name) ?> — Portfolio</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Fira+Code:wght@300;400;500&display=swap" rel="stylesheet">
<style>

[data-theme="dark"] {
  --bg:           #080c10;
  --bg2:          #0d1117;
  --bg3:          #111820;
  --surface:      #141c26;
  --surface2:     #1a2535;
  --border:       rgba(0,240,200,.10);
  --border2:      rgba(0,240,200,.22);
  --text:         #e2eaf4;
  --text2:        #7a90a8;
  --text3:        #4a607a;
  --accent:       #00f0c8;
  --accent2:      #0a8fff;
  --glow:         rgba(0,240,200,.18);
  --glow2:        rgba(10,143,255,.12);
  --tag-bg:       rgba(0,240,200,.08);
  --tag-border:   rgba(0,240,200,.22);
  --tag-text:     #00f0c8;
  --topbar-bg:    rgba(8,12,16,.82);
}
[data-theme="light"] {
  --bg:           #f0f4f8;
  --bg2:          #e8edf5;
  --bg3:          #dde4ee;
  --surface:      #ffffff;
  --surface2:     #f5f8fc;
  --border:       rgba(14,90,200,.10);
  --border2:      rgba(14,90,200,.28);
  --text:         #0f1f33;
  --text2:        #4a6580;
  --text3:        #8aa0ba;
  --accent:       #0a72e8;
  --accent2:      #00b894;
  --glow:         rgba(10,114,232,.13);
  --glow2:        rgba(0,184,148,.10);
  --tag-bg:       rgba(10,114,232,.07);
  --tag-border:   rgba(10,114,232,.22);
  --tag-text:     #0a72e8;
  --topbar-bg:    rgba(240,244,248,.88);
}


*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; cursor: none; }
body { cursor: none; }
a, button, .tag, .proj-card, .exp-card-head, .theme-btn, .dl-btn { cursor: none; }

#cursor-ring {
  position: fixed;
  width: 36px; height: 36px;
  border: 1.5px solid var(--accent);
  border-radius: 50%;
  pointer-events: none;
  z-index: 9999;
  transform: translate(-50%, -50%);
  transition: width .25s ease, height .25s ease, border-color .25s, background .25s, opacity .2s;
  mix-blend-mode: normal;
}
#cursor-dot {
  position: fixed;
  width: 5px; height: 5px;
  background: var(--accent);
  border-radius: 50%;
  pointer-events: none;
  z-index: 10000;
  transform: translate(-50%, -50%);
  transition: width .15s, height .15s, background .2s;
}
#cursor-label {
  position: fixed;
  font-family: 'Fira Code', monospace;
  font-size: 10px; font-weight: 500;
  color: var(--bg);
  background: var(--accent);
  padding: 3px 9px;
  border-radius: 4px;
  pointer-events: none;
  z-index: 9998;
  opacity: 0;
  transform: translate(14px, -50%);
  white-space: nowrap;
  letter-spacing: .06em;
  transition: opacity .2s;
}

/* hover states applied via JS classes */
body.cursor-hover #cursor-ring {
  width: 56px; height: 56px;
  background: rgba(0,240,200,.08);
  border-color: var(--accent);
}
body.cursor-click #cursor-dot {
  width: 10px; height: 10px;
}
body.cursor-link #cursor-ring {
  width: 48px; height: 48px;
  border-color: var(--accent2);
  background: rgba(10,143,255,.10);
}
body.cursor-link #cursor-dot { background: var(--accent2); }


body {
  font-family: 'Fira Code', monospace;
  background: var(--bg);
  color: var(--text);
  font-size: 14px;
  line-height: 1.75;
  transition: background .35s, color .35s;
  overflow-x: hidden;
}

body::before {
  content: '';
  position: fixed; inset: 0;
  background-image:
    linear-gradient(var(--border) 1px, transparent 1px),
    linear-gradient(90deg, var(--border) 1px, transparent 1px);
  background-size: 48px 48px;
  pointer-events: none;
  z-index: 0;
  opacity: .5;
}

::-webkit-scrollbar { width: 5px; }
::-webkit-scrollbar-track { background: var(--bg2); }
::-webkit-scrollbar-thumb { background: var(--accent); border-radius: 2px; }


.topbar {
  position: sticky; top: 0; z-index: 200;
  display: flex; align-items: center; justify-content: space-between;
  padding: 16px 40px;
  background: var(--topbar-bg);
  backdrop-filter: blur(18px);
  border-bottom: 1px solid var(--border);
  transition: background .35s;
}
.topbar-logo {
  font-family: 'Syne', sans-serif;
  font-weight: 800; font-size: 18px;
  letter-spacing: -.02em; color: var(--text);
}
.topbar-logo span { color: var(--accent); }
.topbar-nav { display: flex; gap: 28px; }
.topbar-nav a {
  font-size: 11px; font-weight: 500;
  letter-spacing: .14em; text-transform: uppercase;
  color: var(--text2); text-decoration: none;
  transition: color .2s;
}
.topbar-nav a:hover { color: var(--accent); }
.dl-btn {
  display: inline-flex; align-items: center; gap: 7px;
  background: var(--accent);
  color: var(--bg);
  font-family: 'Fira Code', monospace;
  font-size: 12px; font-weight: 500;
  padding: 7px 16px;
  border-radius: 6px;
  text-decoration: none;
  border: none; cursor: pointer;
  transition: opacity .2s, box-shadow .2s, transform .15s;
  box-shadow: 0 0 14px var(--glow);
  white-space: nowrap;
}
.dl-btn:hover {
  opacity: .88;
  transform: translateY(-1px);
  box-shadow: 0 4px 20px var(--glow);
}
.theme-btn {
  cursor: pointer;
  background: var(--surface);
  border: 1px solid var(--border2);
  border-radius: 24px;
  padding: 6px 16px;
  display: flex; align-items: center; gap: 8px;
  color: var(--text2);
  font-family: 'Fira Code', monospace;
  font-size: 12px;
  transition: all .25s;
}
.theme-btn:hover { border-color: var(--accent); color: var(--accent); box-shadow: 0 0 12px var(--glow); }


.wrapper {
  position: relative; z-index: 1;
  max-width: 1120px;
  margin: 0 auto;
  padding: 0 40px 80px;
}


.hero {
  min-height: 88vh;
  display: flex; align-items: center;
  padding: 110px 0 80px;
  position: relative;
}
.hero-glow {
  position: absolute;
  width: 700px; height: 700px; border-radius: 50%;
  background: radial-gradient(circle, var(--glow) 0%, transparent 65%);
  top: 50%; left: -180px; transform: translateY(-50%);
  pointer-events: none;
}
.hero-glow2 {
  position: absolute;
  width: 500px; height: 500px; border-radius: 50%;
  background: radial-gradient(circle, var(--glow2) 0%, transparent 65%);
  top: 10%; right: -120px;
  pointer-events: none;
}
.hero-content { max-width: 660px; position: relative; }

.hero-badge {
  display: inline-flex; align-items: center; gap: 8px;
  font-size: 11px; font-weight: 500;
  letter-spacing: .18em; text-transform: uppercase;
  color: var(--accent); border: 1px solid var(--border2);
  border-radius: 4px; padding: 5px 14px; margin-bottom: 28px;
  background: var(--tag-bg);
  animation: fadeUp .5s ease both;
}
.hero-badge::before { content: '▶'; font-size: 7px; }

.hero h1 {
  font-family: 'Syne', sans-serif;
  font-size: clamp(40px, 6vw, 74px);
  font-weight: 800; line-height: 1.0;
  letter-spacing: -.03em; color: var(--text);
  margin-bottom: 8px;
  animation: fadeUp .55s .08s ease both;
}
.hero h1 .highlight {
  display: block;
  background: linear-gradient(90deg, var(--accent), var(--accent2));
  -webkit-background-clip: text; -webkit-text-fill-color: transparent;
  background-clip: text;
}
.hero-sub {
  font-size: 13px; color: var(--text2);
  margin: 22px 0 16px; letter-spacing: .04em;
  animation: fadeUp .55s .16s ease both;
}
.hero-sub .sep { color: var(--accent); margin: 0 8px; opacity: .45; }
.hero-summary {
  font-size: 13px; color: var(--text2);
  line-height: 1.9; max-width: 560px;
  border-left: 2px solid var(--border2);
  padding-left: 20px; margin-bottom: 36px;
  animation: fadeUp .55s .22s ease both;
}
.hero-meta {
  display: flex; flex-wrap: wrap; gap: 22px;
  animation: fadeUp .55s .28s ease both;
}
.hero-meta-item {
  display: flex; align-items: center; gap: 8px;
  font-size: 12px; color: var(--text2);
}
.hero-meta-item a { color: inherit; text-decoration: none; }
.hero-meta-item a:hover { color: var(--accent); }
.dot { width: 6px; height: 6px; border-radius: 50%; background: var(--accent); flex-shrink: 0; }

.hero-stat {
  position: absolute; right: 0; top: 50%;
  transform: translateY(-50%);
  text-align: center;
  border: 1px solid var(--border2);
  border-radius: 14px;
  padding: 36px 44px;
  background: var(--surface);
  box-shadow: 0 0 40px var(--glow);
  animation: fadeUp .6s .35s ease both;
}
.hero-stat-num {
  font-family: 'Syne', sans-serif;
  font-size: 60px; font-weight: 800;
  color: var(--accent); line-height: 1; display: block;
}
.hero-stat-label {
  font-size: 11px; letter-spacing: .12em;
  text-transform: uppercase; color: var(--text2);
  margin-top: 8px; display: block;
}


.sec { padding: 100px 0 0; }
.sec-head {
  display: flex; align-items: baseline; gap: 16px;
  margin-bottom: 52px;
}
.sec-num {
  font-size: 11px; font-weight: 500;
  letter-spacing: .2em; color: var(--accent);
}
.sec-title {
  font-family: 'Syne', sans-serif;
  font-size: clamp(22px, 3vw, 30px);
  font-weight: 700; letter-spacing: -.02em; color: var(--text);
}
.sec-line {
  flex: 1; height: 1px;
  background: linear-gradient(90deg, var(--border2), transparent);
}


.skills-wrap { display: flex; flex-direction: column; }
.skill-row {
  display: grid; grid-template-columns: 210px 1fr;
  gap: 24px; align-items: start;
  padding: 20px 0;
  border-bottom: 1px solid var(--border);
}
.skill-row:last-child { border-bottom: none; }
.skill-cat {
  font-size: 11px; font-weight: 500;
  letter-spacing: .12em; text-transform: uppercase;
  color: var(--text3); padding-top: 4px;
}
.tag-wrap { display: flex; flex-wrap: wrap; gap: 8px; }
.tag {
  font-size: 11.5px;
  background: var(--tag-bg);
  border: 1px solid var(--tag-border);
  color: var(--tag-text);
  padding: 4px 13px; border-radius: 4px;
  font-family: 'Fira Code', monospace;
  transition: all .2s; cursor: default;
}
.tag:hover {
  background: var(--accent); color: var(--bg);
  border-color: var(--accent); transform: translateY(-2px);
}


.exp-list { display: flex; flex-direction: column; gap: 10px; }
.exp-card {
  border: 1px solid var(--border);
  border-radius: 12px;
  background: var(--surface);
  overflow: hidden;
  transition: border-color .25s, box-shadow .25s;
}
.exp-card:hover { border-color: var(--border2); box-shadow: 0 0 30px var(--glow); }
.exp-card-head {
  display: grid; grid-template-columns: 1fr auto;
  gap: 16px; padding: 28px 32px;
  cursor: pointer; align-items: start;
}
.exp-period {
  font-size: 11px; font-weight: 500;
  letter-spacing: .1em; text-transform: uppercase;
  color: var(--accent); margin-bottom: 8px;
}
.exp-role {
  font-family: 'Syne', sans-serif;
  font-size: 20px; font-weight: 700;
  letter-spacing: -.01em; color: var(--text);
}
.exp-type { font-size: 12px; color: var(--text2); margin-top: 3px; }
.exp-company {
  font-size: 12px; font-weight: 500;
  color: var(--accent2); margin-top: 10px;
  display: flex; align-items: center; gap: 6px;
}
.exp-company::before { content: '//'; color: var(--text3); }
.exp-badge {
  font-size: 10px; font-weight: 600;
  letter-spacing: .1em; text-transform: uppercase;
  background: var(--accent); color: var(--bg);
  padding: 2px 9px; border-radius: 3px;
}
.exp-body { padding: 0 32px 28px; display: none; }
.exp-card.open .exp-body { display: block; }
.exp-card.open { border-color: var(--border2); box-shadow: 0 0 24px var(--glow); }
.exp-points { list-style: none; }
.exp-points li {
  position: relative; padding-left: 22px;
  font-size: 13px; color: var(--text2);
  margin-bottom: 10px; line-height: 1.75;
}
.exp-points li::before {
  content: '>'; position: absolute; left: 0;
  color: var(--accent);
}
.exp-toggle {
  width: 30px; height: 30px; border-radius: 7px;
  border: 1px solid var(--border2); background: transparent;
  color: var(--accent); font-size: 18px;
  display: flex; align-items: center; justify-content: center;
  cursor: pointer; flex-shrink: 0;
  transition: all .2s; margin-top: 2px;
  font-family: monospace;
}
.exp-card.open .exp-toggle { background: var(--accent); color: var(--bg); }


.proj-group { margin-bottom: 52px; }
.proj-group-label {
  font-size: 11px; font-weight: 600;
  letter-spacing: .18em; text-transform: uppercase;
  color: var(--text3); margin-bottom: 22px;
  display: flex; align-items: center; gap: 14px;
}
.proj-group-label::after { content: ''; flex: 1; height: 1px; background: var(--border); }
.proj-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
  gap: 14px;
}
.proj-card {
  background: var(--surface);
  border: 1px solid var(--border);
  border-radius: 10px; padding: 24px;
  position: relative; overflow: hidden;
  transition: border-color .25s, transform .25s, box-shadow .25s;
}
.proj-card::before {
  content: ''; position: absolute;
  top: 0; left: 0; right: 0; height: 2px;
  background: linear-gradient(90deg, var(--accent), var(--accent2));
  opacity: 0; transition: opacity .25s;
}
.proj-card:hover {
  border-color: var(--border2);
  transform: translateY(-4px);
  box-shadow: 0 14px 40px var(--glow);
}
.proj-card:hover::before { opacity: 1; }
.proj-sub {
  font-size: 10px; font-weight: 600;
  letter-spacing: .12em; text-transform: uppercase;
  color: var(--accent); margin-bottom: 6px;
}
.proj-name {
  font-family: 'Syne', sans-serif;
  font-size: 17px; font-weight: 700;
  color: var(--text); margin-bottom: 10px;
}
.proj-desc { font-size: 12.5px; color: var(--text2); line-height: 1.7; }


.edu-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; }
.edu-card, .cert-card {
  background: var(--surface); border: 1px solid var(--border);
  border-radius: 12px; padding: 30px;
  position: relative; overflow: hidden;
  transition: border-color .2s, box-shadow .2s;
}
.edu-card:hover, .cert-card:hover {
  border-color: var(--border2); box-shadow: 0 0 24px var(--glow);
}
.edu-card::after { content: '◈'; position: absolute; right: 22px; top: 22px; font-size: 30px; color: var(--accent); opacity: .1; }
.cert-card::after { content: '◆'; position: absolute; right: 22px; top: 22px; font-size: 26px; color: var(--accent2); opacity: .1; }
.card-eyebrow {
  font-size: 10px; font-weight: 600;
  letter-spacing: .18em; text-transform: uppercase;
  color: var(--accent); margin-bottom: 12px;
}
.card-title {
  font-family: 'Syne', sans-serif;
  font-size: 18px; font-weight: 700;
  color: var(--text); margin-bottom: 6px;
}
.card-school, .card-issuer {
  font-size: 12.5px; color: var(--accent2);
  font-weight: 500; margin-bottom: 4px;
}
.card-period { font-size: 12px; color: var(--text3); }
.grade-badge {
  display: inline-block; margin-top: 14px;
  font-size: 11px; font-weight: 600; letter-spacing: .08em;
  background: linear-gradient(90deg, var(--accent), var(--accent2));
  color: var(--bg); padding: 4px 14px; border-radius: 4px;
}


.footer {
  margin-top: 120px; padding: 48px 0;
  border-top: 1px solid var(--border);
  display: flex; align-items: center;
  justify-content: space-between;
  flex-wrap: wrap; gap: 16px;
}
.footer-left {
  font-family: 'Syne', sans-serif;
  font-size: 22px; font-weight: 700; color: var(--text);
}
.footer-left span { color: var(--accent); }
.footer-right { font-size: 12px; color: var(--text3); }
.footer-links { display: flex; gap: 20px; margin-top: 10px; }
.footer-links a {
  font-size: 11px; font-weight: 500;
  letter-spacing: .12em; text-transform: uppercase;
  color: var(--text2); text-decoration: none; transition: color .2s;
}
.footer-links a:hover { color: var(--accent); }


@keyframes fadeUp {
  from { opacity: 0; transform: translateY(28px); }
  to   { opacity: 1; transform: translateY(0); }
}


@media (max-width: 880px) {
  .topbar { padding: 14px 20px; }
  .topbar-nav { display: none; }
  .wrapper { padding: 0 20px 60px; }
  .hero { flex-direction: column; min-height: auto; padding: 100px 0 50px; }
  .hero-stat { position: static; transform: none; margin-top: 40px; width: 100%; }
  .skill-row { grid-template-columns: 1fr; gap: 10px; }
  .edu-grid { grid-template-columns: 1fr; }
  .footer { flex-direction: column; align-items: flex-start; }
}
</style>
</head>
<body>
<div id="cursor-ring"></div>
<div id="cursor-dot"></div>
<div id="cursor-label"></div>
<header class="topbar">
  <div class="topbar-logo"><?= htmlspecialchars($initials) ?><span>.</span></div>
  <nav class="topbar-nav">
    <a href="#skills">Skills</a>
    <a href="#experience">Experience</a>
    <a href="#projects">Projects</a>
    <a href="#education">Education</a>
  </nav>
  <div style="display:flex;align-items:center;gap:10px;">
    <a href="?download=resume" class="dl-btn">
      <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
      Download Resume
    </a>
    <button class="theme-btn" onclick="toggleTheme()" id="themeBtn">
      <span id="themeIcon">☀️</span>
      <span id="themeLabel">Light</span>
    </button>
  </div>
</header>

<div class="wrapper">

  <section class="hero" id="about">
    <div class="hero-glow"></div>
    <div class="hero-glow2"></div>
    <div class="hero-content">
      <div class="hero-badge"><?= htmlspecialchars($tagline) ?></div>
      <h1>
        <?php $parts = explode(' ', $name); ?>
        <?= htmlspecialchars($parts[0]) ?>
        <span class="highlight"><?= htmlspecialchars($parts[1] ?? '') ?></span>
      </h1>
      <p class="hero-sub">
        <?php $subs = explode(' · ', $subtitle); foreach ($subs as $i => $s): ?>
        <?= htmlspecialchars($s) ?><?= $i < count($subs)-1 ? '<span class="sep">·</span>' : '' ?>
        <?php endforeach; ?>
      </p>
      <p class="hero-summary"><?= htmlspecialchars($summary) ?></p>
      <div class="hero-meta">
        <div class="hero-meta-item"><span class="dot"></span><?= htmlspecialchars($location) ?></div>
        <div class="hero-meta-item"><span class="dot"></span><a href="mailto:<?= htmlspecialchars($email) ?>"><?= htmlspecialchars($email) ?></a></div>
        <div class="hero-meta-item"><span class="dot"></span><?= htmlspecialchars($phone) ?></div>
      </div>
      <div style="margin-top:32px;">
        <a href="?download=resume" class="dl-btn" data-cursor="download" style="font-size:13px;padding:10px 24px;">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
          Download Resume (PDF)
        </a>
      </div>
    </div>
    <div class="hero-stat">
      <span class="hero-stat-num"><?= htmlspecialchars($years_exp) ?></span>
      <span class="hero-stat-label">Years of<br>Experience</span>
    </div>
  </section>

  <section class="sec" id="skills">
    <div class="sec-head">
      <span class="sec-num">01.</span>
      <h2 class="sec-title">Technical Skills</h2>
      <div class="sec-line"></div>
    </div>
    <div class="skills-wrap">
      <?php foreach ($skills as $group): ?>
      <div class="skill-row">
        <div class="skill-cat"><?= htmlspecialchars($group['label']) ?></div>
        <div class="tag-wrap">
          <?php foreach ($group['tags'] as $t): ?>
          <span class="tag"><?= htmlspecialchars($t) ?></span>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="sec" id="experience">
    <div class="sec-head">
      <span class="sec-num">02.</span>
      <h2 class="sec-title">Experience</h2>
      <div class="sec-line"></div>
    </div>
    <div class="exp-list">
      <?php foreach ($experience as $i => $exp): ?>
      <div class="exp-card<?= $i === 0 ? ' open' : '' ?>" id="exp-<?= $i ?>">
        <div class="exp-card-head" onclick="toggleExp(<?= $i ?>)">
          <div>
            <p class="exp-period"><?= htmlspecialchars($exp['period']) ?></p>
            <h3 class="exp-role"><?= htmlspecialchars($exp['role']) ?></h3>
            <?php if ($exp['type']): ?><p class="exp-type"><?= htmlspecialchars($exp['type']) ?></p><?php endif; ?>
            <p class="exp-company"><?= htmlspecialchars($exp['company']) ?><?= $exp['city'] ? ', ' . htmlspecialchars($exp['city']) : '' ?></p>
          </div>
          <div style="display:flex;flex-direction:column;align-items:flex-end;gap:8px;">
            <?php if ($exp['current']): ?><span class="exp-badge">Current</span><?php endif; ?>
            <button class="exp-toggle"><?= $i === 0 ? '−' : '+' ?></button>
          </div>
        </div>
        <div class="exp-body">
          <ul class="exp-points">
            <?php foreach ($exp['points'] as $pt): ?>
            <li><?= htmlspecialchars($pt) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="sec" id="projects">
    <div class="sec-head">
      <span class="sec-num">03.</span>
      <h2 class="sec-title">Projects</h2>
      <div class="sec-line"></div>
    </div>
    <?php foreach ($projects as $pg): ?>
    <div class="proj-group">
      <p class="proj-group-label"><?= htmlspecialchars($pg['company']) ?></p>
      <div class="proj-grid">
        <?php foreach ($pg['items'] as $proj): ?>
        <div class="proj-card">
          <p class="proj-sub"><?= htmlspecialchars($proj['sub']) ?></p>
          <h4 class="proj-name"><?= htmlspecialchars($proj['name']) ?></h4>
          <p class="proj-desc"><?= htmlspecialchars($proj['desc']) ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endforeach; ?>
  </section>

  <section class="sec" id="education">
    <div class="sec-head">
      <span class="sec-num">04.</span>
      <h2 class="sec-title">Education &amp; Certifications</h2>
      <div class="sec-line"></div>
    </div>
    <div class="edu-grid">
      <?php foreach ($education as $edu): ?>
      <div class="edu-card">
        <p class="card-eyebrow">Education</p>
        <h3 class="card-title"><?= htmlspecialchars($edu['degree']) ?></h3>
        <p class="card-school"><?= htmlspecialchars($edu['school']) ?></p>
        <p class="card-period"><?= htmlspecialchars($edu['period']) ?></p>
        <span class="grade-badge">Grade: <?= htmlspecialchars($edu['grade']) ?></span>
      </div>
      <?php endforeach; ?>
      <?php foreach ($certs as $cert): ?>
      <div class="cert-card">
        <p class="card-eyebrow">Certification</p>
        <h3 class="card-title"><?= htmlspecialchars($cert['title']) ?></h3>
        <p class="card-issuer"><?= htmlspecialchars($cert['issuer']) ?></p>
        <p class="card-period"><?= htmlspecialchars($cert['period']) ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <footer class="footer">
    <div>
      <div class="footer-left"><?= htmlspecialchars($initials) ?><span>.</span></div>
      <div class="footer-links">
        <a href="mailto:<?= htmlspecialchars($email) ?>">Email</a>
        <a href="<?= htmlspecialchars($linkedin) ?>">LinkedIn</a>
        <a href="#about">Back to Top ↑</a>
      </div>
    </div>
    <div class="footer-right">&copy; <?= date('Y') ?> <?= htmlspecialchars($name) ?> &nbsp;·&nbsp; Built with PHP</div>
  </footer>

</div>

<script>
const ring  = document.getElementById('cursor-ring');
const dot   = document.getElementById('cursor-dot');
const clabel = document.getElementById('cursor-label');

let mx = -200, my = -200;
let rx = -200, ry = -200;
let raf;

document.addEventListener('mousemove', e => {
  mx = e.clientX; my = e.clientY;
  dot.style.left = mx + 'px';
  dot.style.top  = my + 'px';
  clabel.style.left = mx + 'px';
  clabel.style.top  = my + 'px';
});

(function loop() {
  rx += (mx - rx) * 0.12;
  ry += (my - ry) * 0.12;
  ring.style.left = rx + 'px';
  ring.style.top  = ry + 'px';
  requestAnimationFrame(loop);
})();

document.addEventListener('mousedown', () => document.body.classList.add('cursor-click'));
document.addEventListener('mouseup',   () => document.body.classList.remove('cursor-click'));

const hoverEls = document.querySelectorAll('a, button, .tag, .proj-card, .exp-card-head, .skill-row');
hoverEls.forEach(el => {
  el.addEventListener('mouseenter', () => {
    const isLink = el.tagName === 'A' || el.classList.contains('dl-btn');
    document.body.classList.add(isLink ? 'cursor-link' : 'cursor-hover');
   
    const lbl = el.dataset.cursor || (el.tagName === 'A' ? 'visit' : el.classList.contains('tag') ? 'skill' : el.classList.contains('proj-card') ? 'project' : '');
    if (lbl) { clabel.textContent = lbl; clabel.style.opacity = '1'; }
  });
  el.addEventListener('mouseleave', () => {
    document.body.classList.remove('cursor-hover', 'cursor-link');
    clabel.style.opacity = '0';
  });
});

document.addEventListener('mouseleave', () => { ring.style.opacity='0'; dot.style.opacity='0'; });
document.addEventListener('mouseenter', () => { ring.style.opacity='1'; dot.style.opacity='1'; });

const html  = document.documentElement;
const icon  = document.getElementById('themeIcon');
const label = document.getElementById('themeLabel');

function applyTheme(t) {
  html.setAttribute('data-theme', t);
  icon.textContent  = t === 'dark' ? '☀️' : '🌙';
  label.textContent = t === 'dark' ? 'Light' : 'Dark';
  localStorage.setItem('vs-theme', t);
}
function toggleTheme() {
  applyTheme(html.getAttribute('data-theme') === 'dark' ? 'light' : 'dark');
}
const saved = localStorage.getItem('vs-theme');
if (saved) applyTheme(saved);

function toggleExp(idx) {
  const card   = document.getElementById('exp-' + idx);
  const isOpen = card.classList.contains('open');
  document.querySelectorAll('.exp-card').forEach(c => {
    c.classList.remove('open');
    c.querySelector('.exp-toggle').textContent = '+';
  });
  if (!isOpen) {
    card.classList.add('open');
    card.querySelector('.exp-toggle').textContent = '−';
  }
}

const obs = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.style.opacity = '1';
      e.target.style.transform = 'translateY(0)';
    }
  });
}, { threshold: 0.06 });

document.querySelectorAll('.sec, .proj-card, .skill-row, .edu-card, .cert-card, .exp-card').forEach(el => {
  el.style.opacity = '0';
  el.style.transform = 'translateY(22px)';
  el.style.transition = 'opacity .5s ease, transform .5s ease';
  obs.observe(el);
});
</script>
</body>
</html>
