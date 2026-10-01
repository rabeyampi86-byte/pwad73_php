<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Overview | Northstar</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="dashboard-shell">
		<aside class="sidebar">
			<a class="brand" href="#overview" aria-label="Northstar home">
				<span class="brand-mark">N</span>
				<span>northstar<span class="brand-period">.</span></span>
			</a>
			<div class="workspace-label">WORKSPACE</div>
			<nav class="main-nav" aria-label="Main navigation">
				<a class="nav-link active" href="#overview"><span class="nav-icon">◫</span>Overview</a>
				<a class="nav-link" href="#members"><span class="nav-icon">♧</span>Members</a>
				<a class="nav-link" href="#reports"><span class="nav-icon">▥</span>Reports</a>
				<a class="nav-link" href="#settings"><span class="nav-icon">⚙</span>Settings</a>
			</nav>
			<div class="sidebar-bottom">
				<div class="help-card">
					<span class="help-mark">?</span>
					<div><strong>Need a hand?</strong><span>Visit the help center</span></div>
					<span class="help-arrow">↗</span>
				</div>
				<a class="profile" href="#profile">
					<span class="avatar">JD</span>
					<span class="profile-copy"><strong>Jordan Davis</strong><small>Administrator</small></span>
					<span class="profile-menu">···</span>
				</a>
			</div>
		</aside>

		<main class="main-content" id="overview">
			<header class="topbar">
				<div class="breadcrumb">Workspace <span>/</span> <strong>Overview</strong></div>
				<div class="topbar-actions">
					<button class="icon-button" type="button" aria-label="Search">⌕</button>
					<button class="icon-button notification-button" type="button" aria-label="Notifications">♧<i></i></button>
					<span class="topbar-divider"></span>
					<span class="today-label">Wednesday, October 1</span>
				</div>
			</header>

			<div class="page-content">
				<section class="welcome-row">
					<div>
						<p class="eyebrow">YOUR WORKSPACE AT A GLANCE</p>
						<h1>Good morning, Jordan <span class="wave">✳</span></h1>
						<p class="welcome-copy">Here’s what’s happening across your workspace today.</p>
					</div>
					<button class="primary-button" type="button"><span>＋</span> Invite a member</button>
				</section>

				<section class="stats-grid" aria-label="Workspace statistics">
					<article class="stat-card members-stat">
						<div class="stat-heading"><span>Total members</span><span class="stat-symbol">♧</span></div>
						<div class="stat-value">2,840</div>
						<div class="stat-foot"><span class="positive">↗ 12.8%</span><span>vs. last month</span></div>
						<div class="mini-bars" aria-hidden="true"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></div>
					</article>
					<article class="stat-card active-stat">
						<div class="stat-heading"><span>Active this week</span><span class="stat-symbol">◷</span></div>
						<div class="stat-value">1,926</div>
						<div class="stat-foot"><span class="positive">↗ 8.2%</span><span>vs. last week</span></div>
						<div class="progress-track"><span></span></div>
						<div class="progress-caption"><span>68% of members</span><span>Goal: 75%</span></div>
					</article>
					<article class="stat-card invite-stat">
						<div class="stat-heading"><span>Pending invites</span><span class="stat-symbol">✉</span></div>
						<div class="stat-value">24</div>
						<div class="stat-foot"><span class="neutral">6 sent today</span></div>
						<div class="invite-avatars" aria-label="Recently invited members"><span>AK</span><span>ML</span><span>TS</span><span>+21</span></div>
					</article>
				</section>

				<section class="content-grid">
					<article class="panel activity-panel" id="reports">
						<div class="panel-header">
							<div><h2>Member activity</h2><p>Workspace engagement over time</p></div>
							<button class="select-button" type="button">Last 7 days <span>⌄</span></button>
						</div>
						<div class="chart-summary"><strong>1,926</strong><span class="positive">↗ 8.2%</span><small>active members</small></div>
						<div class="chart" role="img" aria-label="Member activity increased through the week, peaking on Sunday">
							<div class="chart-y-labels"><span>2.5k</span><span>2.0k</span><span>1.5k</span><span>1.0k</span><span>0.5k</span></div>
							<div class="chart-area">
								<div class="chart-grid"><i></i><i></i><i></i><i></i><i></i></div>
								<svg viewBox="0 0 700 190" preserveAspectRatio="none" aria-hidden="true">
									<defs><linearGradient id="activity-fill" x1="0" x2="0" y1="0" y2="1"><stop offset="0%" stop-color="#4f8b78" stop-opacity=".22" /><stop offset="100%" stop-color="#4f8b78" stop-opacity="0" /></linearGradient></defs>
									<path class="chart-fill" d="M0 136 C35 128 46 110 100 118 S165 144 200 108 S265 96 300 104 S365 124 400 78 S465 90 500 66 S565 88 600 48 S665 60 700 22 L700 190 L0 190 Z" />
									<path class="chart-line" d="M0 136 C35 128 46 110 100 118 S165 144 200 108 S265 96 300 104 S365 124 400 78 S465 90 500 66 S565 88 600 48 S665 60 700 22" />
									<circle cx="700" cy="22" r="5" />
								</svg>
								<div class="chart-x-labels"><span>Thu</span><span>Fri</span><span>Sat</span><span>Sun</span><span>Mon</span><span>Tue</span><span>Wed</span></div>
							</div>
						</div>
					</article>
					<article class="panel shortcuts-panel">
						<div class="panel-header"><div><h2>Quick actions</h2><p>Common workspace tasks</p></div></div>
						<a class="shortcut" href="#members"><span class="shortcut-icon green-icon">＋</span><span><strong>Invite members</strong><small>Grow your workspace</small></span><b>›</b></a>
						<a class="shortcut" href="#reports"><span class="shortcut-icon blue-icon">▤</span><span><strong>View reports</strong><small>Explore your activity</small></span><b>›</b></a>
						<a class="shortcut" href="#settings"><span class="shortcut-icon yellow-icon">⚙</span><span><strong>Workspace settings</strong><small>Manage preferences</small></span><b>›</b></a>
						<div class="tip-box"><span>✦</span><p><strong>Good to know</strong><br>Keep your workspace secure by reviewing member access regularly.</p></div>
					</article>
				</section>

				<section class="panel members-panel" id="members">
					<div class="panel-header members-header">
						<div><h2>Recently added members</h2><p>The latest people to join your workspace</p></div>
						<a class="view-all" href="#members">View all members <span>→</span></a>
					</div>
					<div class="table-wrap">
						<table>
							<thead><tr><th>MEMBER</th><th>ROLE</th><th>JOINED</th><th>STATUS</th><th></th></tr></thead>
							<tbody>
								<tr><td><span class="member-cell"><span class="person-avatar avatar-coral">AM</span><span><strong>Alex Morgan</strong><small>alex.morgan@example.com</small></span></span></td><td><span class="role-label">Editor</span></td><td>Today, 9:42 AM</td><td><span class="status-pill"><i></i>Active</span></td><td><button class="more-button" type="button" aria-label="More options for Alex Morgan">···</button></td></tr>
								<tr><td><span class="member-cell"><span class="person-avatar avatar-blue">RK</span><span><strong>Riley Kim</strong><small>riley.kim@example.com</small></span></span></td><td><span class="role-label">Member</span></td><td>Yesterday</td><td><span class="status-pill"><i></i>Active</span></td><td><button class="more-button" type="button" aria-label="More options for Riley Kim">···</button></td></tr>
								<tr><td><span class="member-cell"><span class="person-avatar avatar-lilac">SP</span><span><strong>Sam Patel</strong><small>sam.patel@example.com</small></span></span></td><td><span class="role-label">Viewer</span></td><td>Sep 28, 2026</td><td><span class="status-pill"><i></i>Active</span></td><td><button class="more-button" type="button" aria-label="More options for Sam Patel">···</button></td></tr>
							</tbody>
						</table>
					</div>
				</section>
				<footer class="page-footer"><span>© 2026 Northstar</span><span>All systems operational <i></i></span></footer>
			</div>
		</main>
	</div>
</body>
</html>
