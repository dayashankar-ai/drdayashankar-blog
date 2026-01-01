<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enterprise Healthcare AI Insights | Dr. Daya Shankar Tiwari</title>
    <meta name="description" content="Practical, board-level guidance to plan, govern, and scale AI in healthcare. Nuclear-grade systems engineering meets clinical safety and ROI models.">
    
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZKFH6DZL08"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-ZKFH6DZL08');
    </script>

    <!-- Google Search Console Verification -->
    <meta name="google-site-verification" content="PACbaDKONM8AJO9k0IX2AernAKRC0bDUbY7FqDKOIiw">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #1a202c;
            background: #f7fafc;
        }

        .header {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
            color: white;
            padding: 3rem 1rem;
            text-align: center;
        }

        .header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .header p {
            font-size: 1.125rem;
            opacity: 0.95;
            max-width: 800px;
            margin: 0 auto;
        }

        .nav {
            background: #1e293b;
            padding: 1rem;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .nav-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            transition: background 0.2s;
        }

        .nav a:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }

        .featured {
            background: white;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin-bottom: 3rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }

        .featured-image {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            min-height: 300px;
        }

        .featured-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .featured-content {
            padding: 2rem;
        }

        .featured-badge {
            background: #3b82f6;
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.875rem;
            display: inline-block;
            margin-bottom: 1rem;
        }

        .featured h2 {
            font-size: 1.875rem;
            margin-bottom: 1rem;
            color: #1e293b;
        }

        .featured p {
            color: #64748b;
            margin-bottom: 1.5rem;
        }

        .featured-meta {
            display: flex;
            gap: 1rem;
            font-size: 0.875rem;
            color: #94a3b8;
            margin-bottom: 1.5rem;
        }

        .btn {
            display: inline-block;
            background: #3b82f6;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s;
        }

        .btn:hover {
            background: #2563eb;
            transform: translateY(-2px);
        }

        .section-title {
            font-size: 2rem;
            margin-bottom: 2rem;
            color: #1e293b;
        }

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .blog-card {
            background: white;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            transition: all 0.3s;
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .blog-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.15);
        }

        .blog-card-image {
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
        }

        .blog-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .blog-card-content {
            padding: 1.5rem;
        }

        .blog-card-meta {
            display: flex;
            gap: 1rem;
            font-size: 0.875rem;
            color: #94a3b8;
            margin-bottom: 1rem;
        }

        .blog-card h3 {
            font-size: 1.25rem;
            margin-bottom: 0.75rem;
            color: #1e293b;
        }

        .blog-card p {
            color: #64748b;
            font-size: 0.9375rem;
            margin-bottom: 1rem;
        }

        .blog-card-footer {
            color: #3b82f6;
            font-weight: 500;
            font-size: 0.9375rem;
        }

        .footer {
            background: #1e293b;
            color: white;
            padding: 2rem 1rem;
            margin-top: 4rem;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        /* EMAIL POPUP STYLES */
        .email-popup-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 9999;
            animation: fadeIn 0.3s;
        }

        .email-popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            border-radius: 1rem;
            padding: 2.5rem;
            max-width: 500px;
            width: 90%;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            animation: slideUp 0.4s;
        }

        .popup-close {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: #64748b;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: all 0.2s;
        }

        .popup-close:hover {
            background: #f1f5f9;
            color: #1e293b;
        }

        .popup-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
        }

        .email-popup h2 {
            font-size: 1.75rem;
            color: #1e293b;
            margin-bottom: 0.75rem;
            text-align: center;
        }

        .email-popup p {
            color: #64748b;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .popup-benefits {
            list-style: none;
            margin-bottom: 1.5rem;
        }

        .popup-benefits li {
            padding: 0.5rem 0;
            color: #475569;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .popup-benefits li:before {
            content: '✓';
            display: inline-block;
            width: 24px;
            height: 24px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 50%;
            text-align: center;
            line-height: 24px;
            font-weight: bold;
            flex-shrink: 0;
        }

        .popup-form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .popup-input {
            padding: 0.875rem 1rem;
            border: 2px solid #e2e8f0;
            border-radius: 0.5rem;
            font-size: 1rem;
            transition: all 0.2s;
        }

        .popup-input:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .popup-submit {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1rem;
            border: none;
            border-radius: 0.5rem;
            font-size: 1.125rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
        }

        .popup-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(102, 126, 234, 0.3);
        }

        .popup-privacy {
            font-size: 0.75rem;
            color: #94a3b8;
            text-align: center;
            margin-top: 1rem;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from { 
                opacity: 0;
                transform: translate(-50%, -40%);
            }
            to { 
                opacity: 1;
                transform: translate(-50%, -50%);
            }
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 1.875rem;
            }

            .featured {
                grid-template-columns: 1fr;
            }

            .blog-grid {
                grid-template-columns: 1fr;
            }

            .nav-content {
                flex-direction: column;
                gap: 1rem;
            }

            .email-popup {
                padding: 2rem 1.5rem;
            }

            .email-popup h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- EMAIL POPUP -->
    <div class="email-popup-overlay" id="emailPopup">
        <div class="email-popup">
            <button class="popup-close" onclick="closePopup()">×</button>
            <div class="popup-icon">📧</div>
            <h2>Get Weekly Healthcare AI Insights</h2>
            <p>Join 1,000+ healthcare professionals receiving cutting-edge AI strategies</p>
            
            <ul class="popup-benefits">
                <li>Latest AI implementation case studies</li>
                <li>Exclusive ROI calculators & templates</li>
                <li>Early access to new research</li>
                <li>Free trial of VaidyaAI platform</li>
            </ul>

            <form class="popup-form" id="subscribeForm" onsubmit="handleSubmit(event)">
                <input 
                    type="email" 
                    class="popup-input" 
                    placeholder="Enter your email" 
                    required 
                    id="emailInput"
                >
                <button type="submit" class="popup-submit">
                    Subscribe Free
                </button>
            </form>

            <p class="popup-privacy">
                🔒 Your email is safe. Unsubscribe anytime. No spam, ever.
            </p>
        </div>
    </div>

    <nav class="nav">
        <div class="nav-content">
            <a href="/" style="font-weight: 600;">DST</a>
            <div style="display: flex; gap: 1rem;">
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/blog">Blog</a>
                <a href="/contact">Contact</a>
            </div>
        </div>
    </nav>

    <div class="header">
        <h1>Enterprise Healthcare AI Insights</h1>
        <p>Practical, board-level guidance to plan, govern, and scale AI in healthcare. Nuclear-grade systems engineering meets clinical safety and ROI models.</p>
    </div>

    <div class="container">
        <?php
        // Load posts from JSON
        $jsonPath = __DIR__ . '/../uploads/blog-posts/posts-list.json';
        $posts = [];
        
        if (file_exists($jsonPath)) {
            $jsonContent = file_get_contents($jsonPath);
            $posts = json_decode($jsonContent, true);
            
            // Sort by date (newest first)
            usort($posts, function($a, $b) {
                return strcmp($b['date'], $a['date']);
            });
        }

        if (!empty($posts)) {
            // Featured post (first post)
            $featured = $posts[0];
            $featuredDate = date('M d, Y', strtotime($featured['date']));
            $thumbnailPath = '/uploads/blog-posts/thumbnails/' . $featured['date'] . '-' . $featured['slug'] . '.png';
            
            echo '<div class="featured">';
            echo '<div class="featured-image">';
            echo '<img src="' . htmlspecialchars($thumbnailPath) . '" alt="' . htmlspecialchars($featured['title']) . '" loading="lazy">';
            echo '</div>';
            echo '<div class="featured-content">';
            echo '<span class="featured-badge">Featured</span>';
            echo '<div class="featured-meta">';
            echo '<span>📅 ' . $featuredDate . '</span>';
            echo '<span>⏱️ 5-7 min read</span>';
            echo '</div>';
            echo '<h2>' . htmlspecialchars($featured['title']) . '</h2>';
            echo '<p>' . htmlspecialchars($featured['description']) . '</p>';
            echo '<a href="/uploads/blog-posts/' . $featured['date'] . '-' . $featured['slug'] . '.html" class="btn">Read Full Article</a>';
            echo '</div>';
            echo '</div>';

            // Recent articles
            echo '<h2 class="section-title">Recent Articles</h2>';
            echo '<div class="blog-grid">';
            
            for ($i = 1; $i < count($posts); $i++) {
                $post = $posts[$i];
                $postDate = date('M d, Y', strtotime($post['date']));
                $postThumbnail = '/uploads/blog-posts/thumbnails/' . $post['date'] . '-' . $post['slug'] . '.png';
                
                echo '<a href="/uploads/blog-posts/' . $post['date'] . '-' . $post['slug'] . '.html" class="blog-card">';
                echo '<div class="blog-card-image">';
                echo '<img src="' . htmlspecialchars($postThumbnail) . '" alt="' . htmlspecialchars($post['title']) . '" loading="lazy">';
                echo '</div>';
                echo '<div class="blog-card-content">';
                echo '<div class="blog-card-meta">';
                echo '<span>📅 ' . $postDate . '</span>';
                echo '<span>Healthcare AI</span>';
                echo '</div>';
                echo '<h3>' . htmlspecialchars($post['title']) . '</h3>';
                echo '<p>' . htmlspecialchars(substr($post['description'], 0, 120)) . '...</p>';
                echo '<div class="blog-card-footer">Read More →</div>';
                echo '</div>';
                echo '</a>';
            }
            
            echo '</div>';
        } else {
            echo '<div style="text-align: center; padding: 4rem 0;">';
            echo '<p style="font-size: 1.5rem; color: #64748b;">📝 Blog coming soon!</p>';
            echo '</div>';
        }
        ?>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2025 Dr. Daya Shankar Tiwari. All rights reserved.</p>
            <p style="margin-top: 0.5rem; opacity: 0.8;">Dean, School of Sciences | VaidyaAI Founder | ET GrailHunt PhD</p>
        </div>
    </footer>

    <script>
        // Show popup after 30 seconds
        setTimeout(function() {
            // Check if user has already seen popup today
            const lastShown = localStorage.getItem('emailPopupShown');
            const today = new Date().toDateString();
            
            if (lastShown !== today) {
                document.getElementById('emailPopup').style.display = 'block';
                localStorage.setItem('emailPopupShown', today);
                
                // Track popup view in Google Analytics
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'popup_shown', {
                        'event_category': 'engagement',
                        'event_label': 'email_signup_popup'
                    });
                }
            }
        }, 30000); // 30 seconds

        function closePopup() {
            document.getElementById('emailPopup').style.display = 'none';
            
            // Track popup close
            if (typeof gtag !== 'undefined') {
                gtag('event', 'popup_closed', {
                    'event_category': 'engagement',
                    'event_label': 'email_signup_popup'
                });
            }
        }

        function handleSubmit(event) {
            event.preventDefault();
            
            const email = document.getElementById('emailInput').value;
            
            // Track email signup attempt
            if (typeof gtag !== 'undefined') {
                gtag('event', 'email_signup', {
                    'event_category': 'conversion',
                    'event_label': 'blog_popup'
                });
            }
            
            // TODO: Connect to Mailchimp (we'll do this next)
            // For now, just show success message
            alert('Thanks for subscribing! Check your email for confirmation.');
            closePopup();
            
            // Reset form
            document.getElementById('subscribeForm').reset();
        }

        // Close popup when clicking outside
        document.getElementById('emailPopup').addEventListener('click', function(e) {
            if (e.target === this) {
                closePopup();
            }
        });
    </script>
</body>
</html>
