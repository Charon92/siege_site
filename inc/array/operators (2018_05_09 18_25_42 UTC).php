<?php

// Empty Oparetors array
$operators = [];

// Adding operators to the array

/* Korea */

$operators[0] = [
  "name" => "Vigil",
  "fullname" => "Chul Kyung Hwa",
  "position" => "Defender",
  "fullimage" => "/assets/operators/vigil.png",
  "icon" => "/assets/operators/icons/vigil.png",
  "dob" => "17-01-1984",
  "description" => "Chul Kyung Hwa spent months on the run in Asia as a child. He lost his family during the flight before finding asylum in South Korea. As an adult, he enlisted in the ROK Navy and later earned a berth in the ROKN UDT/SEALs, becoming so highly skilled that the 707th Special Mission Battalion handpicked him as an operator. His ERC-7 backpack enables him to vanish from live feeds. ",
  "birthplace" => "Unknown",
  "ctu" => "707th SMB",
  "ability" => [
    "name" => "Electronic Rendering Cloak (ERC-7)",
    "description" => "The ERC-7 uses Diminished Reality technology to remove perceivable stimuli from its direct environment. Vigil carries a prototype in his backpack, which scans surrounding electronic devices and wipes his image from any cameras in view.",
    "image" => "/assets/operators/abilities/vigil.png",
  ],
  "weapons" => [
    1 => [
      "name" => "K1A",
      "image" => "/assets/operators/weapons/k1a.jpg",
      "description" => "A submachine gun in a compact AR package and caliber. Offers medium-range accuracy.",
      "damage" => [
        "normal" => 36,
        "suppressed" => 30,
      ],
      "magazine" => "30 + 1",
      "rate-of-fire" => 720,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Flash Hider",
          2 => "Suppressor",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "BOSG.12.2",
      "image" => "/assets/operators/weapons/bosg122.jpg",
      "description" => "Top break, over-under double-barrel shotgun. Long-range and in tactical configuration.",
      "damage" => [
        "normal" => 125,
        "suppressed" => "?",
      ],
      "magazine" => 2,
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => "?",
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "C75 Auto",
      "image" => "/assets/operators/weapons/c75auto.jpg",
      "description" => "Fully automatic pistol that is effective at short range, and uses a spare mag as foregrip for more control.",
      "damage" => [
        "normal" => 35,
        "suppressed" => 29,
      ],
      "magazine" => "26 + 1",
      "rate-of-fire" => 1000,
      "mobility" => 50,
      "attachments" => [
        "sights" => "?",
        "barrel" => [
          1 => "suppressor",
        ],
        "grip" => "?",
        "underbarrel" => "?",
      ],
    ],
    4 => [
      "name" => "SMG-12",
      "image" => "/assets/operators/weapons/smg12.jpg",
      "description" => "Customized machine pistol that is light, compact, and optimal at short range. Possesses a high rate of fire.",
      "damage" => [
        "normal" => 28,
        "suppressed" => "?",
      ],
      "magazine" => "32 + 1",
      "rate-of-fire" => 1270,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => "?",
        "grip" => [

        ],
        "underbarrel" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
      ],
    ],
  ],
  "tips" => [

  ],
];

$operators[1] = [
  "name" => "Dokkaebi",
  "fullname" => "Grace Nam",
  "position" => "Attacker",
  "fullimage" => "/assets/operators/dokkaebi.png",
  "icon" => "/assets/operators/icons/dokkaebi.png",
  "dob" => "02-02-1988",
  "description" => "Born and raised in Seoul, South Korea, Grace Nam gained notice in the ROK Army for her exemplary tech skills and for being highly adaptable to situations. During joint exercises with Detachment K Green Berets, her American instructors encouraged her to try out for the 707th Special Mission Battalion. She passed, but her entry into Rainbow was far more unorthodox. During operations, she can hack enemy phones, causing them to vibrate and give up enemy positions.",
  "birthplace" => "Seoul, South Korea",
  "ctu" => "707th SMB",
  "ability" => [
    "name" => "Logic Bomb",
    "description" => "Grace utilizes the Ballistic Armor Military Laptop, codenamed Logic Bomb, which she uses to hack enemy PDA tactical devices. The program downloads a virus of her making that can bypass firewalls, turning surrounding devices on and emitting a loud noise to compromise an enemy’s position.",
    "image" => "/assets/operators/abilities/dokkaebi.png",
  ],
  "weapons" => [
    1 => [
      "name" => "MK14 EBR",
      "image" => "/assets/operators/weapons/mk14.jpg",
      "description" => "Classic, hard-hitting .308 Battle Rifle in a lighter and shorter chassis. Effective in long-range battles, devastating short-range.",
      "damage" => [
        "normal" => 60,
        "suppressed" => 51,
      ],
      "magazine" => "20 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
          4 => "ACOG",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "BOSG.12.2",
      "image" => "/assets/operators/weapons/bosg122.jpg",
      "description" => "Top break, over-under double-barrel shotgun. Long-range and in tactical configuration.",
      "damage" => [
        "normal" => 125,
        "suppressed" => "?",
      ],
      "magazine" => 2,
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => "?",
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "C75 Auto",
      "image" => "/assets/operators/weapons/c75auto.jpg",
      "description" => "Fully automatic pistol that is effective at short range, and uses a spare mag as foregrip for more control.",
      "damage" => [
        "normal" => 35,
        "suppressed" => 29,
      ],
      "magazine" => "26 + 1",
      "rate-of-fire" => 1000,
      "mobility" => 50,
      "attachments" => [
        "sights" => "?",
        "barrel" => [
          1 => "suppressor",
        ],
        "grip" => "?",
        "underbarrel" => "?",
      ],
    ],
    4 => [
      "name" => "SMG-12",
      "image" => "/assets/operators/weapons/smg12.jpg",
      "description" => "Customized machine pistol that is light, compact, and optimal at short range. Possesses a high rate of fire.",
      "damage" => [
        "normal" => 28,
        "suppressed" => "?",
      ],
      "magazine" => "32 + 1",
      "rate-of-fire" => 1270,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => "?",
        "grip" => [

        ],
        "underbarrel" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
      ],
    ],
  ],
  "tips" => [

  ],
];

/* Poland */

$operators[2] = [
  "name" => "Zofia",
  "fullname" => "Zofia Bosak",
  "position" => "Attacker",
  "fullimage" => "/assets/operators/zofia.png",
  "icon" => "/assets/operators/icons/zofia.png",
  "dob" => "01-28-1981",
  "description" => "The well-known, decorated officer Zofia Bosak is the second Specialist from Poland’s counter-terrorism unit GROM to integrate into Rainbow, the first being her younger sister, Elzbieta Bosak. She has always been the favorite of the two sisters, which caused a significant divide between them. Following a maternity leave, Zofia returned to the GROM soon after hearing Ela would pass the selection. When Ela accepted the prestigious offer to join Team Rainbow, Zofia saw no reason to stay behind. Everything about the GROM now seems to remind her of her father and his tragic death. ",
  "birthplace" => "Wroclaw, poland",
  "ctu" => "GROM",
  "ability" => [
    "name" => "KS79 LIFELINE",
    "description" => "KS79 LIFELINE makes use of electronically triggered projectile technology that can fire both concussion and impact ammunition. The concussion ammunition delivers a 170-decibel shockwave that impairs hearing and causes a dizzying effect.",
    "image" => "/assets/operators/abilities/zofia.png",
  ],
  "weapons" => [
    1 => [
      "name" => "LMG-E",
      "image" => "/assets/operators/weapons/lmg-e.jpg",
      "description" => "Compact package belt-fed AR, with a 150 round box. Lays down a fierce medium-range suppressive fire.",
      "damage" => [
        "normal" => 32,
        "suppressed" => 27,
      ],
      "magazine" => "150 + 1",
      "rate-of-fire" => 720,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
          4 => "ACOG",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "Vertical Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "M762",
      "image" => "/assets/operators/weapons/m762.jpg",
      "description" => "Effective medium-range AR with custom shoulder stock, front hand guard, and flat upper rail.",
      "damage" => [
        "normal" => 45,
        "suppressed" => 38,
      ],
      "magazine" => "30 + 1",
      "rate-of-fire" => 730,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
          4 => "ACOG",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "RG15",
      "image" => "/assets/operators/weapons/rg15.jpg",
      "description" => "Customized 9mm semi-automatic handgun, equipped with a Romeo1 Reflex.",
      "damage" => [
        "normal" => 38,
        "suppressed" => 32,
      ],
      "magazine" => "15 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => "?",
        "barrel" => [
          1 => "suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => "?",
        "underbarrel" => "laser",
      ],
    ],
  ],
  "tips" => [

  ],
];

$operators[3] = [
  "name" => "Ela",
  "fullname" => "Elżbieta Bosak",
  "position" => "Defender",
  "fullimage" => "/assets/operators/ela.png",
  "icon" => "/assets/operators/icons/ela.png",
  "dob" => "11-08-1985",
  "description" => "Elzbieta Bosak is the newest addition to Team Rainbow. Nicknamed Ela, this driven 30-year-old has had an unconventional progression. Having quickly risen among Poland’s Special Forces, she was deployed in six countries and active in Iraq for seven years.Her exploits should come as no surprise, considering that she is the youngest daughter of Jan Bosak, a former commander of Poland’s counter-terrorism unit GROM. Despite this legacy, Ela is not the stiff soldier one would expect. Ela experienced some difficulties while attending a military high school. She was bullied constantly due to the special attention she received as the GROM Commander’s daughter.",
  "birthplace" => "Wroclaw, poland",
  "ctu" => "GROM",
  "ability" => [
    "name" => "Grzmot mine",
    "description" => "Inspired by the 1939 anti-tank Polish grenades used by the iconic Cichociemny during WWII, the sticky Grzmot mines can be anchored on surfaces, impairing hearing and causing a dizzying effect. These concussion mines are triggered upon proximity, affecting anyone within its radius.",
    "image" => "/assets/operators/abilities/ela.png",
  ],
  "weapons" => [
    1 => [
      "name" => "Scorpion EVO 3 A1",
      "image" => "/assets/operators/weapons/scorpion.jpg",
      "description" => "Lightweight 9mm carbine that offers selective fire. Mags extended to 50-round cap.",
      "damage" => [
        "normal" => 28,
        "suppressed" => 23,
      ],
      "magazine" => "50 + 1",
      "rate-of-fire" => 1080,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "FO-12",
      "image" => "/assets/operators/weapons/fo12.jpg",
      "description" => "12-gauge semi-automatic, mag-fed combat shotgun. Fast reload and optimal in CQC.",
      "damage" => [
        "normal" => 35,
        "suppressed" => 29,
      ],
      "magazine" => "10 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Extended Barrel",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "RG15",
      "image" => "/assets/operators/weapons/rg15.jpg",
      "description" => "Customized 9mm semi-automatic handgun, equipped with a Romeo1 Reflex.",
      "damage" => [
        "normal" => 38,
        "suppressed" => 32,
      ],
      "magazine" => "15 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => "?",
        "barrel" => [
          1 => "suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => "?",
        "underbarrel" => "laser",
      ],
    ],
  ],
  "tips" => [

  ],
];

/* Hong Kong */

$operators[4] = [
  "name" => "Ying",
  "fullname" => "Siu Mei Lin",
  "position" => "Attacker",
  "fullimage" => "/assets/operators/ying.png",
  "icon" => "/assets/operators/icons/ying.png",
  "dob" => "07-12-1983",
  "description" => "Born in the comfortable Central District of Hong Kong, Siu Mei Lin, codenamed Ying (firefly), was a close protection operative before joining the Special Duties Unit. Having developed explosive short-range power and combat skills, she joined an elite security service school right after high school. When she was tasked with a high-stakes money exchange during a kidnapping situation, however, she realized how limited her means were. Driven to have greater impact, she re-oriented her career to become an all-purpose operative. A year later, she joined a female-exclusive training in Tel Aviv, Israel, where she perfected her hand-to-hand combat skills and driving maneuvers. ",
  "birthplace" => "Hong Kong, central",
  "ctu" => "S.D.U",
  "ability" => [
    "name" => "Candela device",
    "description" => "Inspired by the new breed of stun grenades showcased by the S.A.S., this mercury and magnesium based explosive creates a multitude of blinding flashes. The Candela device releases a cluster of flash charges that can either be anchored on surfaces or thrown out as a grenade.",
    "image" => "/assets/operators/abilities/ying.png",
  ],
  "weapons" => [
    1 => [
      "name" => "T95-LSW",
      "image" => "/assets/operators/weapons/t95lsw.jpg",
      "description" => "This custom 5.56x45mm caliber LMG is a portable powerhouse of automatic hardware.",
      "damage" => [
        "normal" => 34,
        "suppressed" => 28,
      ],
      "magazine" => "80 + 1",
      "rate-of-fire" => 650,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
          4 => "ACOG",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "Six12",
      "image" => "/assets/operators/weapons/six12.jpg",
      "description" => "Compact 12-gauge bullpup double action revolver shotgun. Good for CQC and fast reload.",
      "damage" => [
        "normal" => 35,
        "suppressed" => "?",
      ],
      "magazine" => "10 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "?",
          2 => "?",
        ],
        "grip" => [
          1 => "?",
          2 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "Q929",
      "image" => "/assets/operators/weapons/q929.jpg",
      "description" => "This 9mm semi-automatic pistol is highly accurate and lightweight with low recoil.",
      "damage" => [
        "normal" => 50,
        "suppressed" => 42,
      ],
      "magazine" => "10 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => "?",
        "barrel" => [
          1 => "suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => "?",
        "underbarrel" => "laser",
      ],
    ],
  ],
  "tips" => [

  ],
];

$operators[5] = [
  "name" => "Lesion",
  "fullname" => "Liu Tze Long",
  "position" => "Defender",
  "fullimage" => "/assets/operators/lesion.png",
  "icon" => "/assets/operators/icons/lesion.png",
  "dob" => "07-02-1972",
  "description" => "Born in Junk Bay, Liu Tze Long, codenamed Lesion, was raised by his father, who worked for a ship breaking company. During these years, Lesion would stay at the shipyard, and help him dismantle obsolete ships for scrapping. Crumbling with debts after his father was injured, Lesion took on various hazardous jobs in demolition until he found an opportunity for mine clearance duty. Demonstrating a natural calm while handling highly corrosive substances, he joined the Explosive Ordnance Disposal Bureau. He is a known expert in chemical, biological, radiological and nuclear (CBRN) terrorist threats. ",
  "birthplace" => "Junk Bay (Tseung Kwan o)",
  "ctu" => "S.D.U",
  "ability" => [
    "name" => "GU Mine",
    "description" => "Gu mines were inspired by the sharp punji sticks used during the Vietnam War. Rubbed with toxic plants or feces, the stakes served to slow down enemy troops by causing severe infections in their camp. Similarly, Gu mines inject a toxin that injure your opponent and limit their speed.",
    "image" => "/assets/operators/abilities/lesion.png",
  ],
  "weapons" => [
    1 => [
      "name" => "T5-SMG",
      "image" => "/assets/operators/weapons/t5smg.jpg",
      "description" => "This open bolt 9mm lightweight submachine gun has a high rate of fire.",
      "damage" => [
        "normal" => 30,
        "suppressed" => 25,
      ],
      "magazine" => "30 + 1",
      "rate-of-fire" => 900,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "?",
          2 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "Six12-SD",
      "image" => "/assets/operators/weapons/six12sd.jpg",
      "description" => "Compact 12-gauge bullpup double action revolver shotgun. Good for CQC and fast reload.",
      "damage" => [
        "normal" => 35,
        "suppressed" => "?",
      ],
      "magazine" => "10 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "?",
          2 => "?",
        ],
        "grip" => [
          1 => "?",
          2 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "Q929",
      "image" => "/assets/operators/weapons/q929.jpg",
      "description" => "This 9mm semi-automatic pistol is highly accurate and lightweight with low recoil.",
      "damage" => [
        "normal" => 50,
        "suppressed" => 42,
      ],
      "magazine" => "10 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => "?",
        "barrel" => [
          1 => "suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => "?",
        "underbarrel" => "laser",
      ],
    ],
  ],
  "tips" => [

  ],
];

/* Spain */

$operators[6] = [
  "name" => "Mira",
  "fullname" => "Elena Maria Alvarez del Manzano",
  "position" => "Defender",
  "fullimage" => "/assets/operators/mira.png",
  "icon" => "/assets/operators/icons/mira.png",
  "dob" => "11-18-1971",
  "description" => "Elena María Álvarez was born in Retiro, Madrid, where she learned to spot and fix mechanical defects on automobile engines. Demonstrating solid physical endurance and a stubborn need to prove her worth, Álvarez later joined the Grupo Especial de Operaciones (G.E.O.). Her wide-ranging knowledge of vehicles made her an expert in the ballistic field, which she uses to develop and test bulletproof materials.",
  "birthplace" => "Madrid, Spain",
  "ctu" => "G.E.O",
  "ability" => [
    "name" => "Black Mirror",
    "description" => "A specialized laminated glass, which when deployed with oxyacetylene can carve out a one-way mirror on any wall. If the air pressure is disrupted, however, the glass is ejected and creates a daring opening for both defenders and attackers.",
    "image" => "/assets/operators/abilities/mira.png",
  ],
  "weapons" => [
    1 => [
      "name" => "Vector .45 ACP",
      "image" => "/assets/operators/weapons/vector.jpg",
      "description" => ".45 submachine gun with unique proprietary recoil & muzzle climb mitigation system. Features a single, two-round burst, or full-Automatic fire selection.",
      "damage" => [
        "normal" => 23,
        "suppressed" => 19,
      ],
      "magazine" => "25 + 1",
      "rate-of-fire" => 1200,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "Vertical Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "ITA12L",
      "image" => "/assets/operators/weapons/ita12l.jpg",
      "description" => "Lightweight pump action 12-gauge shotgun with a 22' barrel. Packs a good punch.",
      "damage" => [
        "normal" => 47,
        "suppressed" => "?",
      ],
      "magazine" => "7 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "?",
          2 => "?",
        ],
        "grip" => [
          1 => "?",
          2 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "ITA12S",
      "image" => "/assets/operators/weapons/ita12s.jpg",
      "description" => "Compact pump action 12-gauge shotgun with close range stopping power. Optimal for CQB.",
      "damage" => [
        "normal" => 66,
        "suppressed" => "?",
      ],
      "magazine" => "4 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "?",
          2 => "?",
        ],
        "grip" => [
          1 => "?",
          2 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    4 => [
      "name" => "USP40",
      "image" => "/assets/operators/weapons/usp40.jpg",
      "description" => ".40 caliber semi-automatic pistol that has a low recoil, best used in mid-range combat.",
      "damage" => [
        "normal" => 43,
        "suppressed" => 36,
      ],
      "magazine" => "12 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "?",
          2 => "?",
          3 => "?",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "?",
          2 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
  ],
  "tips" => [

  ],
];

$operators[7] = [
  "name" => "Jackal",
  "fullname" => "Ryad Ramirez Al-Hassar",
  "position" => "Attacker",
  "fullimage" => "/assets/operators/jackal.png",
  "icon" => "/assets/operators/icons/jackal.png",
  "dob" => "02-29-1968",
  "description" => "Born in Ceuta, Spain, Ryad Ramírez Al-Hassar’s broad resourcefulness on difficult terrains made him an expert tracker. His extensive training outside the Cuerpo Nacional de Policía include several survival courses, tactical desert navigation programs, and specialized combat diving practice. Ramírez is known to be the best asset of the G.E.O. to track down HVTs and intercept narcotics shipments. He is ruthless on the field and determined to unravel the events that led to the loss of his older brother, Faisal.",
  "birthplace" => "Ceuta, Spain",
  "ctu" => "G.E.O",
  "ability" => [
    "name" => "Eyenox Model III ",
    "description" => "Eyenox Model III was created to offer a mobile tracking device able to both identify and trail a person’s footprints in real-time. Equipped with advanced computer vision, the Eyenox detects invisible details relating to footfall and weight distribution so that you can identify and stalk your target.",
    "image" => "/assets/operators/abilities/jackal.png",
  ],
  "weapons" => [
    1 => [
      "name" => "C7E",
      "image" => "/assets/operators/weapons/c7e.jpg",
      "description" => "Canadian assault rifle with both semi-automatic and fully automatic fire modes. Integrated heavy barrel for good recoil control.",
      "damage" => [
        "normal" => 46,
        "suppressed" => 39,
      ],
      "magazine" => "30 + 1",
      "rate-of-fire" => 800,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
          4 => "ACOG",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "PDW9",
      "image" => "/assets/operators/weapons/pdw9.jpg",
      "description" => "9mm AR platform PDW, customized to offer Full-Automatic fire. Equipped with Drum magazine.",
      "damage" => [
        "normal" => 33,
        "suppressed" => 28,
      ],
      "magazine" => "50 + 1",
      "rate-of-fire" => 800,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
          4 => "ACOG",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "ITA12L",
      "image" => "/assets/operators/weapons/ita12l.jpg",
      "description" => "Lightweight pump action 12-gauge shotgun with a 22' barrel. Packs a good punch.",
      "damage" => [
        "normal" => 47,
        "suppressed" => "?",
      ],
      "magazine" => "7 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "?",
          2 => "?",
        ],
        "grip" => [
          1 => "?",
          2 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    4 => [
      "name" => "ITA12S",
      "image" => "/assets/operators/weapons/ita12s.jpg",
      "description" => "Compact pump action 12-gauge shotgun with close range stopping power. Optimal for CQB.",
      "damage" => [
        "normal" => 66,
        "suppressed" => "?",
      ],
      "magazine" => "4 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "?",
          2 => "?",
        ],
        "grip" => [
          1 => "?",
          2 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    5 => [
      "name" => "USP40",
      "image" => "/assets/operators/weapons/usp40.jpg",
      "description" => ".40 caliber semi-automatic pistol that has a low recoil, best used in mid-range combat.",
      "damage" => [
        "normal" => 43,
        "suppressed" => 36,
      ],
      "magazine" => "12 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "?",
          2 => "?",
          3 => "?",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "?",
          2 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
  ],
  "tips" => [

  ],
];

/* Japan */

$operators[8] = [
  "name" => "Hibana",
  "fullname" => "",
  "position" => "",
  "fullimage" => "/assets/operators/hibana.png",
  "icon" => "/assets/operators/icons/hibana.png",
  "dob" => "",
  "description" => "",
  "birthplace" => "",
  "ctu" => "S.D.F",
  "ability" => [
    "name" => "",
    "description" => "",
    "image" => "/assets/operators/abilities/.png",
  ],
  "weapons" => [
    1 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 28,
        "suppressed" => 23,
      ],
      "magazine" => "50 + 1",
      "rate-of-fire" => 1080,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 35,
        "suppressed" => 29,
      ],
      "magazine" => "10 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Extended Barrel",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 38,
        "suppressed" => 32,
      ],
      "magazine" => "15 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => "?",
        "barrel" => [
          1 => "suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => "?",
        "underbarrel" => "laser",
      ],
    ],
  ],
  "tips" => [

  ],
];

$operators[9] = [
  "name" => "Echo",
  "fullname" => "",
  "position" => "",
  "fullimage" => "/assets/operators/echo.png",
  "icon" => "/assets/operators/icons/echo.png",
  "dob" => "",
  "description" => "",
  "birthplace" => "",
  "ctu" => "S.D.F",
  "ability" => [
    "name" => "",
    "description" => "",
    "image" => "/assets/operators/abilities/.png",
  ],
  "weapons" => [
    1 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 28,
        "suppressed" => 23,
      ],
      "magazine" => "50 + 1",
      "rate-of-fire" => 1080,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 35,
        "suppressed" => 29,
      ],
      "magazine" => "10 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Extended Barrel",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 38,
        "suppressed" => 32,
      ],
      "magazine" => "15 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => "?",
        "barrel" => [
          1 => "suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => "?",
        "underbarrel" => "laser",
      ],
    ],
  ],
  "tips" => [

  ],
];

/* Brazil */

$operators[10] = [
  "name" => "Caveira",
  "fullname" => "",
  "position" => "",
  "fullimage" => "/assets/operators/caveira.png",
  "icon" => "/assets/operators/icons/caveira.png",
  "dob" => "",
  "description" => "",
  "birthplace" => "",
  "ctu" => "BOPE",
  "ability" => [
    "name" => "",
    "description" => "",
    "image" => "/assets/operators/abilities/.png",
  ],
  "weapons" => [
    1 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 28,
        "suppressed" => 23,
      ],
      "magazine" => "50 + 1",
      "rate-of-fire" => 1080,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 35,
        "suppressed" => 29,
      ],
      "magazine" => "10 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Extended Barrel",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 38,
        "suppressed" => 32,
      ],
      "magazine" => "15 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => "?",
        "barrel" => [
          1 => "suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => "?",
        "underbarrel" => "laser",
      ],
    ],
  ],
  "tips" => [

  ],
];

$operators[11] = [
  "name" => "Capitao",
  "fullname" => "",
  "position" => "",
  "fullimage" => "/assets/operators/capitao.png",
  "icon" => "/assets/operators/icons/capitao.png",
  "dob" => "",
  "description" => "",
  "birthplace" => "",
  "ctu" => "BOPE",
  "ability" => [
    "name" => "",
    "description" => "",
    "image" => "/assets/operators/abilities/.png",
  ],
  "weapons" => [
    1 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 28,
        "suppressed" => 23,
      ],
      "magazine" => "50 + 1",
      "rate-of-fire" => 1080,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 35,
        "suppressed" => 29,
      ],
      "magazine" => "10 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Extended Barrel",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 38,
        "suppressed" => 32,
      ],
      "magazine" => "15 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => "?",
        "barrel" => [
          1 => "suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => "?",
        "underbarrel" => "laser",
      ],
    ],
  ],
  "tips" => [

  ],
];

/* Seals */

$operators[12] = [
  "name" => "Blackbeard",
  "fullname" => "",
  "position" => "",
  "fullimage" => "/assets/operators/blackbeard.png",
  "icon" => "/assets/operators/icons/blackbeard.png",
  "dob" => "",
  "description" => "",
  "birthplace" => "",
  "ctu" => "Navy Seals",
  "ability" => [
    "name" => "",
    "description" => "",
    "image" => "/assets/operators/abilities/.png",
  ],
  "weapons" => [
    1 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 28,
        "suppressed" => 23,
      ],
      "magazine" => "50 + 1",
      "rate-of-fire" => 1080,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 35,
        "suppressed" => 29,
      ],
      "magazine" => "10 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Extended Barrel",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 38,
        "suppressed" => 32,
      ],
      "magazine" => "15 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => "?",
        "barrel" => [
          1 => "suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => "?",
        "underbarrel" => "laser",
      ],
    ],
  ],
  "tips" => [

  ],
];

$operators[13] = [
  "name" => "Valkyrie",
  "fullname" => "",
  "position" => "",
  "fullimage" => "/assets/operators/valkyrie.png",
  "icon" => "/assets/operators/icons/valkyrie.png",
  "dob" => "",
  "description" => "",
  "birthplace" => "",
  "ctu" => "Navy Seals",
  "ability" => [
    "name" => "",
    "description" => "",
    "image" => "/assets/operators/abilities/.png",
  ],
  "weapons" => [
    1 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 28,
        "suppressed" => 23,
      ],
      "magazine" => "50 + 1",
      "rate-of-fire" => 1080,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 35,
        "suppressed" => 29,
      ],
      "magazine" => "10 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Extended Barrel",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 38,
        "suppressed" => 32,
      ],
      "magazine" => "15 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => "?",
        "barrel" => [
          1 => "suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => "?",
        "underbarrel" => "laser",
      ],
    ],
  ],
  "tips" => [

  ],
];

/* JTF */

$operators[14] = [
  "name" => "Buck",
  "fullname" => "",
  "position" => "",
  "fullimage" => "/assets/operators/buck.png",
  "icon" => "/assets/operators/icons/buck.png",
  "dob" => "",
  "description" => "",
  "birthplace" => "",
  "ctu" => "JTF",
  "ability" => [
    "name" => "",
    "description" => "",
    "image" => "/assets/operators/abilities/.png",
  ],
  "weapons" => [
    1 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 28,
        "suppressed" => 23,
      ],
      "magazine" => "50 + 1",
      "rate-of-fire" => 1080,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 35,
        "suppressed" => 29,
      ],
      "magazine" => "10 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Extended Barrel",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 38,
        "suppressed" => 32,
      ],
      "magazine" => "15 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => "?",
        "barrel" => [
          1 => "suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => "?",
        "underbarrel" => "laser",
      ],
    ],
  ],
  "tips" => [

  ],
];

$operators[15] = [
  "name" => "Frost",
  "fullname" => "",
  "position" => "",
  "fullimage" => "/assets/operators/frost.png",
  "icon" => "/assets/operators/icons/frost.png",
  "dob" => "",
  "description" => "",
  "birthplace" => "",
  "ctu" => "JTF",
  "ability" => [
    "name" => "",
    "description" => "",
    "image" => "/assets/operators/abilities/.png",
  ],
  "weapons" => [
    1 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 28,
        "suppressed" => 23,
      ],
      "magazine" => "50 + 1",
      "rate-of-fire" => 1080,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 35,
        "suppressed" => 29,
      ],
      "magazine" => "10 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Extended Barrel",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 38,
        "suppressed" => 32,
      ],
      "magazine" => "15 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => "?",
        "barrel" => [
          1 => "suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => "?",
        "underbarrel" => "laser",
      ],
    ],
  ],
  "tips" => [

  ],
];

/* SAS */
$operators[16] = [
  "name" => "Mute",
  "fullname" => "Mark R. Chandar",
  "position" => "Defender",
  "fullimage" => "/assets/operators/mute.png",
  "icon" => "/assets/operators/icons/mute.png",
  "dob" => "10-11-1991",
  "description" => "A veteran of Britain's Government Communications Headquarters (GCHQ) unit, Mark Chandar’s exceptional work as a signals intelligence (sigint) specialist has made him a valuable addition to Rainbow. He brings with him a Signal Disruptor from his former career, which allows Chandar to jam all communications in a set area, preventing remote detonations and the use of drones. The GC90 “Moni”, blocks the signal from a remote detonator or control from reaching any device within range.",
  "birthplace" => "York, England",
  "ctu" => "S.A.S",
  "ability" => [
    "name" => "Moni - GC90 Signal Disrupter",
    "description" => "Developed by Britain’s Government Communications Headquarters (GCHQ) the “Moni” was originally designed as a portable device that could blackout any radio transmissions or communication devices for covert or sensitive meetings between British government officials and foreign interests. As one of the primary engineers on the project, Chandar created a variant of the device that doubled the effective range of the original GCHQ signal disruptor.",
    "image" => "/assets/operators/abilities/mute.png",
  ],
  "weapons" => [
    1 => [
      "name" => "MP5K",
      "image" => "/assets/operators/weapons/mp5k.jpg",
      "description" => "Close range 9mm submachine gun with a high rate of fire.",
      "damage" => [
        "normal" => 30,
        "suppressed" => 25,
      ],
      "magazine" => "30 + 1",
      "rate-of-fire" => 800,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "?",
          2 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "M500",
      "image" => "/assets/operators/weapons/m500.jpg",
      "description" => "12-gauge pump action shotgun favored by SAS, optimal at close range.",
      "damage" => [
        "normal" => 45,
        "suppressed" => "?",
      ],
      "magazine" => "7",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "?",
          2 => "?",
        ],
        "grip" => [
          1 => "?",
          2 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "P226",
      "image" => "/assets/operators/weapons/p226.jpg",
      "description" => "SAS 9mm handgun with a large magazine. Packs a good punch for short to medium range assaults.",
      "damage" => [
        "normal" => 53,
        "suppressed" => 45,
      ],
      "magazine" => "15 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => "?",
        "barrel" => [
          1 => "suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => "?",
        "underbarrel" => "laser",
      ],
    ],
  ],
  "tips" => [

  ],
];

$operators[17] = [
  "name" => "Sledge",
  "fullname" => "Seamus Cowden",
  "position" => "Attacker",
  "fullimage" => "/assets/operators/sledge.png",
  "icon" => "/assets/operators/icons/sledge.png",
  "dob" => "",
  "description" => "Seamus Cowden is a natural leader and intimidating physical powerhouse; he holds the all-time speed and strength record for the SAS qualifying physical exam. He prefers to be the point person on operations, ready to create a path for his teammates with one swing of his tactical breaching hammer “The Caber”. Sledge is the operator to choose for quick and relatively silent destruction. His breaching hammer can be used to quickly go through multiple destructible walls, floors and barricades.",
  "birthplace" => "04-02-1982",
  "ctu" => "S.A.S",
  "ability" => [
    "name" => "The Caber - Tactical breaching hammer",
    "description" => "While breaching hammers are nothing new to CTU or law enforcement operations, “The Caber” is unique due its exceptional size and weight. Such dimensions would be impractical in the hands of most agents but Sledge’s exceptional physical prowess make it a formidable presence on the battlefield, allowing for quick and effective breaches.",
    "image" => "/assets/operators/abilities/sledge.png",
  ],
  "weapons" => [
    1 => [
      "name" => "L85A2",
      "image" => "/assets/operators/weapons/l85a2.jpg",
      "description" => "Assault rifle favored by SAS for medium to long range combat. Takes 5.56x45mm rounds.",
      "damage" => [
        "normal" => 45,
        "suppressed" => 38,
      ],
      "magazine" => "30 + 1",
      "rate-of-fire" => 670,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
          4 => "ACOG",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "M590A1",
      "image" => "/assets/operators/weapons/m590a1.jpg",
      "description" => "12-gauge pump action shotgun favored by SAS, optimal at close range.",
      "damage" => [
        "normal" => 45,
        "suppressed" => "?",
      ],
      "magazine" => "7",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "?",
          2 => "?",
        ],
        "grip" => [
          1 => "?",
          2 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "P226",
      "image" => "/assets/operators/weapons/p226.jpg",
      "description" => "SAS 9mm handgun with a large magazine. Packs a good punch for short to medium range assaults.",
      "damage" => [
        "normal" => 53,
        "suppressed" => 45,
      ],
      "magazine" => "15 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => "?",
        "barrel" => [
          1 => "suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => "?",
        "underbarrel" => "laser",
      ],
    ],
  ],
    4 => [
      "name" => "SMG-11",
      "image" => "/assets/operators/weapons/smg11.jpg",
      "description" => "Small sized submachine gun with a high rate of fire. Lethal package in disciplined hands.",
      "damage" => [
        "normal" => 32,
        "suppressed" => 27,
      ],
      "magazine" => "16 + 1",
      "rate-of-fire" => 1270,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Extended Barrel",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
  "tips" => [

  ],
];

$operators[18] = [
  "name" => "Thatcher",
  "fullname" => "Mike Baker",
  "position" => "Attacker",
  "fullimage" => "/assets/operators/thatcher.png",
  "icon" => "/assets/operators/icons/thatcher.png",
  "dob" => "06-22-1961",
  "description" => "Born into a family of stevedores, Baker enlisted for active military duty on his eighteenth birthday. A veteran of three wars, Baker was the oldest SAS operative on active duty until he was recruited by Rainbow. Highly observant, calculating and decisive, Baker’s demeanor may denote traces of impatient cynicism, but he possesses a profound sense of ethical responsibility. He does best when assigned with junior operators of strong moral conviction, whom he can mentor.",
  "birthplace" => "Bideford",
  "ctu" => "S.A.S",
  "ability" => [
    "name" => "The Caber - Tactical breaching hammer",
    "description" => "While breaching hammers are nothing new to CTU or law enforcement operations, “The Caber” is unique due its exceptional size and weight. Such dimensions would be impractical in the hands of most agents but Sledge’s exceptional physical prowess make it a formidable presence on the battlefield, allowing for quick and effective breaches.",
    "image" => "/assets/operators/abilities/sledge.png",
  ],
  "weapons" => [
    1 => [
      "name" => "L85A2",
      "image" => "/assets/operators/weapons/l85a2.jpg",
      "description" => "Assault rifle favored by SAS for medium to long range combat. Takes 5.56x45mm rounds.",
      "damage" => [
        "normal" => 45,
        "suppressed" => 38,
      ],
      "magazine" => "30 + 1",
      "rate-of-fire" => 670,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
          4 => "ACOG",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "M590A1",
      "image" => "/assets/operators/weapons/m590a1.jpg",
      "description" => "12-gauge pump action shotgun favored by SAS, optimal at close range.",
      "damage" => [
        "normal" => 45,
        "suppressed" => "?",
      ],
      "magazine" => "7",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "?",
          2 => "?",
        ],
        "grip" => [
          1 => "?",
          2 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "P226",
      "image" => "/assets/operators/weapons/p226.jpg",
      "description" => "SAS 9mm handgun with a large magazine. Packs a good punch for short to medium range assaults.",
      "damage" => [
        "normal" => 53,
        "suppressed" => 45,
      ],
      "magazine" => "15 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => "?",
        "barrel" => [
          1 => "suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => "?",
        "underbarrel" => "laser",
      ],
    ],
  ],
    4 => [
      "name" => "SMG-11",
      "image" => "/assets/operators/weapons/smg11.jpg",
      "description" => "Small sized submachine gun with a high rate of fire. Lethal package in disciplined hands.",
      "damage" => [
        "normal" => 32,
        "suppressed" => 27,
      ],
      "magazine" => "16 + 1",
      "rate-of-fire" => 1270,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Extended Barrel",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
  "tips" => [

  ],
];

$operators[19] = [
  "name" => "Smoke",
  "fullname" => "Martin Simms",
  "position" => "Defender",
  "fullimage" => "/assets/operators/smoke.png",
  "icon" => "/assets/operators/icons/smoke.png",
  "dob" => "05-14-1981",
  "description" => "Porter is a thrill seeker with very little regard for his personal safety. He is fearless in battle and can be a great asset for defensive maneuvers, however he seems to enjoy the havoc and chaos of war. He uses a remote detonated dispersal mine filled with a gas of disclosed contents to impede hostile advances.",
  "birthplace" => "04-02-1982",
  "ctu" => "S.A.S",
  "ability" => [
    "name" => "Compound Z8 - Remote Gas Grenade",
    "description" => "Porter requested a portable defense system that could deliver the most damage to intruders in a targeted area. Fashioned with a remote detonator, Porter can view the results from a distance. The mines are filled with a collection of biological substances, that on their own are inert, but when combined, have a more volatile effect. The resulting concoction incapacitates anyone exposed to it. ",
    "image" => "/assets/operators/abilities/smoke.png",
  ],
  "weapons" => [
    1 => [
      "name" => "FMG-9",
      "image" => "/assets/operators/weapons/fmg9.jpg",
      "description" => "9mm close to mid-range submachine gun with moderate recoil and high rate of fire",
      "damage" => [
        "normal" => 30,
        "suppressed" => 25,
      ],
      "magazine" => "30 + 1",
      "rate-of-fire" => 800,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "?",
          2 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "M590A1",
      "image" => "/assets/operators/weapons/m590a1.jpg",
      "description" => "12-gauge pump action shotgun favored by SAS, optimal at close range.",
      "damage" => [
        "normal" => 45,
        "suppressed" => "?",
      ],
      "magazine" => "7",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "?",
          2 => "?",
        ],
        "grip" => [
          1 => "?",
          2 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "P226",
      "image" => "/assets/operators/weapons/p226.jpg",
      "description" => "SAS 9mm handgun with a large magazine. Packs a good punch for short to medium range assaults.",
      "damage" => [
        "normal" => 53,
        "suppressed" => 45,
      ],
      "magazine" => "15 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => "?",
        "barrel" => [
          1 => "suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => "?",
        "underbarrel" => "laser",
      ],
    ],
  ],
    4 => [
      "name" => "SMG-11",
      "image" => "/assets/operators/weapons/smg11.jpg",
      "description" => "Small sized submachine gun with a high rate of fire. Lethal package in disciplined hands.",
      "damage" => [
        "normal" => 32,
        "suppressed" => 27,
      ],
      "magazine" => "16 + 1",
      "rate-of-fire" => 1270,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Extended Barrel",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
  "tips" => [

  ],
];

/* SWAT operators */

$operators[20] = [
  "name" => "Ash",
  "fullname" => "Eliza Cohen",
  "position" => "Attacker",
  "fullimage" => "/assets/operators/ash.png",
  "icon" => "/assets/operators/icons/ash.png",
  "dob" => "12-24-1983",
  "description" => "Eliza Cohen cut her teeth serving in her native Israel's IDF. She's currently part of FBI SWAT thanks to an international law enforcement exchange program. Cohen brought her knowledge of demolitions with her in producing a weapon-mounted breach charge capable of blowing open a door or wall from a distance.",
  "birthplace" => "Jerusalem, Isreal",
  "ctu" => "SWAT",
  "ability" => [
    "name" => "M120 CREM Breaching Round (Compact Rifle Entry Munition)",
    "description" => "The M120 CREM was developed as a portable projectile breaching weapon. Similar to other explosive breaching tools used by American and Israeli armed forces, the M120 CREM is capable of breaching through doors without the need to focus on destroying hinges or locks for entry. Unlike other explosive breaching methods, the M120 CREM is comparatively portable with its decreased size and weight, allowing it to be carried as a secondary weapon. The M120 CREM has been successfully utilized by FBI SWAT in penetrating fortified compounds during hostage and search and rescue operations.",
    "image" => "/assets/operators/abilities/ash.png",
  ],
  "weapons" => [
    1 => [
      "name" => "G36C",
      "image" => "/assets/operators/weapons/g36c.jpg",
      "description" => "Assault rifle with medium recoil. Takes 5.56mm caliber ammunition.",
      "damage" => [
        "normal" => 38,
        "suppressed" => 32,
      ],
      "magazine" => "30 + 1",
      "rate-of-fire" => 780,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
          4 => "ACOG",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "R4C",
      "image" => "/assets/operators/weapons/r4c.jpg",
      "description" => "FBI SWAT standard issue assault rifle. Highly customizable, for medium to long range conflict.",
      "damage" => [
        "normal" => 41,
        "suppressed" => 34,
      ],
      "magazine" => "30 + 1",
      "rate-of-fire" => 860,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
          4 => "ACOG",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Extended Barrel",
          3 => "Compensator",
          4 => "Muzzle Brake",
          5 => "Flash Hider",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "M45 MEUSOC",
      "image" => "/assets/operators/weapons/m45.jpg",
      "description" => "Semi-automatic, high caliber pistol with medium stopping power and extended range.",
      "damage" => [
        "normal" => 47,
        "suppressed" => 39,
      ],
      "magazine" => "7 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => "?",
        "barrel" => [
          1 => "suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => "?",
        "underbarrel" => "laser",
      ],
    ],
  ],
  4 => [
    "name" => "5.7 USG",
    "image" => "/assets/operators/weapons/57usg.jpg",
    "description" => "Semi-automatic pistol with low-caliber, high-velocity rounds. Used by FBI SWAT.",
    "damage" => [
      "normal" => 27,
      "suppressed" => 22,
    ],
    "magazine" => "20 + 1",
    "rate-of-fire" => "?",
    "mobility" => 50,
    "attachments" => [
      "sights" => "?",
      "barrel" => [
        1 => "suppressor",
        2 => "Muzzle Brake",
      ],
      "grip" => "?",
      "underbarrel" => "laser",
    ],
  ],
  "tips" => [

  ],
];

$operators[21] = [
  "name" => "Thermite",
  "fullname" => "Jordan Trace",
  "position" => "Attacker",
  "fullimage" => "/assets/operators/thermite.png",
  "icon" => "/assets/operators/icons/thermite.png",
  "dob" => "03-14-1982",
  "description" => "A former marine, Jordan Trace served two years in Iraq and earned a degree in Chemistry after his discharge. Upon graduation, he joined the FBI as a field agent and later transferred to the SWAT unit. He carries an explosive breach charge he developed with the FBI SWAT engineering team that is capable of burning through the most resilient barriers.",
  "birthplace" => "Plano, TX",
  "ctu" => "SWAT",
  "ability" => [
    "name" => "Brimstone BC-3 Exo-Thermic Charge",
    "description" => "Developed by FBI SWAT engineers, the BRIMSTONE was designed to breach reinforced locations utilizing a compact and portable explosive load that can deliver maximum force and destruction. As can be seen in the game, the charge first burns through the barrier and then blows that cut piece up with C4. The BRIMSTONE was effectively utilized in the field during a rescue operation in which several people were held hostage in a fortified farmhouse. (Which can possibly be a hint of the operation taking place in Oregon.) The destructive power of the BRIMSTONE allowed agents to breach a reinforced metal security door at the back of the house.",
    "image" => "/assets/operators/abilities/thermite.png",
  ],
  "weapons" => [
    1 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 28,
        "suppressed" => 23,
      ],
      "magazine" => "50 + 1",
      "rate-of-fire" => 1080,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 35,
        "suppressed" => 29,
      ],
      "magazine" => "10 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Extended Barrel",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 38,
        "suppressed" => 32,
      ],
      "magazine" => "15 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => "?",
        "barrel" => [
          1 => "suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => "?",
        "underbarrel" => "laser",
      ],
    ],
  ],
  "tips" => [

  ],
];

$operators[22] = [
  "name" => "Castle",
  "fullname" => "Miles Campbell",
  "position" => "Defender",
  "fullimage" => "/assets/operators/castle.png",
  "icon" => "/assets/operators/icons/castle.png",
  "dob" => "20-09-1980",
  "description" => "Miles Campbell holds a BA in Criminal Justice and is a former LAPD SWAT officer who went federal and is now an FBI SWAT veteran. He brings an expertise in defense and reinforcement to Rainbow squad, ever ready to deploy his signature reinforced barricades.",
  "birthplace" => "Sherman Oaks, California",
  "ctu" => "SWAT",
  "ability" => [
    "name" => "Armor Panel UTP1-Universal Tactical Panel",
    "description" => "Rollable bulletproof armour panel",
    "image" => "/assets/operators/abilities/castle.png",
  ],
  "weapons" => [
    1 => [
      "name" => "UMP-45",
      "image" => "/assets/operators/weapons/ump45.jpg",
      "description" => "FBI SWAT submachine gun with high stopping power. Use burst fire in medium range for accuracy.",
      "damage" => [
        "normal" => 38,
        "suppressed" => 32,
      ],
      "magazine" => "25 + 1",
      "rate-of-fire" => 600,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
          5 => "Extended Barrel",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "M1014",
      "image" => "/assets/operators/weapons/m1014.jpg",
      "description" => "Medium range semi-automatic shotgun. Lethal at close range.",
      "damage" => [
        "normal" => 32,
        "suppressed" => "?",
      ],
      "magazine" => "7 + 1",
      "rate-of-fire" => "~220",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "?",
          2 => "?",
        ],
        "grip" => [
          1 => "?",
          2 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "Five-Seven USG",
      "image" => "/assets/operators/weapons/57usg.jpg",
      "description" => "Semi-automatic pistol with low-caliber, high-velocity rounds. Used by FBI SWAT.",
      "damage" => [
        "normal" => 42,
        "suppressed" => 35,
      ],
      "magazine" => "20 + 1",
      "rate-of-fire" => "~360",
      "mobility" => 50,
      "attachments" => [
        "sights" => "?",
        "barrel" => [
          1 => "suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => "?",
        "underbarrel" => "laser",
      ],
    ],
    4 => [
      "name" => "M45 MEUSOC",
      "image" => "/assets/operators/weapons/m45.jpg",
      "description" => "Semi-automatic, high caliber pistol with medium stopping power and extended range.",
      "damage" => [
        "normal" => 58,
        "suppressed" => 49,
      ],
      "magazine" => "7 + 1",
      "rate-of-fire" => "~360",
      "mobility" => 50,
      "attachments" => [
        "sights" => "?",
        "barrel" => [
          1 => "suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => "?",
        "underbarrel" => "laser",
      ],
    ],
  ],
  "tips" => [

  ],
];

$operators[23] = [
  "name" => "Pulse",
  "fullname" => "Eric T. Miller",
  "position" => "Defender",
  "fullimage" => "/assets/operators/pulse.png",
  "icon" => "/assets/operators/icons/pulse.png",
  "dob" => "11-11-1984",
  "description" => "Jack Estrada's work with the FBI biometrics program allowed him to blend his background in communications and biochemistry to a powerful effect. Moving from the lab to active duty in 2010, his ability to read people made him a natural negotiator. He wields a heartbeat sensor capable of detecting enemies or allies at a distance.",
  "birthplace" => "Goldsboro, North Carolina",
  "ctu" => "SWAT",
  "ability" => [
    "name" => "HB-5 Cardiac Sensor",
    "description" => "This heartbeat detector can read thermal signatures through walls and other obstacles.",
    "image" => "/assets/operators/abilities/pulse.png",
  ],
  "weapons" => [
    1 => [
      "name" => "UMP-45",
      "image" => "/assets/operators/weapons/ump45.jpg",
      "description" => "FBI SWAT submachine gun with high stopping power. Use burst fire in medium range for accuracy.",
      "damage" => [
        "normal" => 38,
        "suppressed" => 32,
      ],
      "magazine" => "25 + 1",
      "rate-of-fire" => 600,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
          5 => "Extended Barrel",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "M1014",
      "image" => "/assets/operators/weapons/m1014.jpg",
      "description" => "Medium range semi-automatic shotgun. Lethal at close range.",
      "damage" => [
        "normal" => 32,
        "suppressed" => "?",
      ],
      "magazine" => "7 + 1",
      "rate-of-fire" => "~220",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "?",
          2 => "?",
        ],
        "grip" => [
          1 => "?",
          2 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "Five-Seven USG",
      "image" => "/assets/operators/weapons/57usg.jpg",
      "description" => "Semi-automatic pistol with low-caliber, high-velocity rounds. Used by FBI SWAT.",
      "damage" => [
        "normal" => 42,
        "suppressed" => 35,
      ],
      "magazine" => "20 + 1",
      "rate-of-fire" => "~360",
      "mobility" => 50,
      "attachments" => [
        "sights" => "?",
        "barrel" => [
          1 => "suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => "?",
        "underbarrel" => "laser",
      ],
    ],
  ],
  "tips" => [

  ],
];

/* GIGN */

$operators[24] = [
  "name" => "Montagne",
  "fullname" => "Gilles Touré",
  "position" => "Attacker",
  "fullimage" => "/assets/operators/montagne.png",
  "icon" => "/assets/operators/icons/montagne.png",
  "dob" => "11-11-1968",
  "description" => "A veteran of the National Gendarmerie, Gilles Touré is the longest-serving GIGN operative. Fiercely protective of his teammates, this gentle giant would not hesitate to throw himself in front of a bullet if it meant protecting his fellow operators from harm.",
  "birthplace" => "Bordeaux, France",
  "ctu" => "GIGN",
  "ability" => [
    "name" => "Le Roc Extendable Shield",
    "description" => "The Le Roc Extendable Shield can expand to offer full protection while standing.",
    "image" => "/assets/operators/abilities/montagne.png",
  ],
  "weapons" => [
    1 => [
      "name" => "P9",
      "image" => "/assets/operators/weapons/p9.jpg",
      "description" => "9mm handgun favored by GIGN. Short to medium range. 16 round magazine.",
      "damage" => [
        "normal" => 45,
        "suppressed" => 38,
      ],
      "magazine" => "16 + 1",
      "rate-of-fire" => "~360",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "?",
          2 => "?",
          3 => "?",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "?",
          2 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "LFP586",
      "image" => "/assets/operators/weapons/lfp586.jpg",
      "description" => ".357 magnum revolver, short to medium range handgun, with high stopping power and penetration.",
      "damage" => [
        "normal" => 78,
        "suppressed" => "?",
      ],
      "magazine" => "6",
      "rate-of-fire" => "~360",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "?",
          2 => "?",
          3 => "?",
        ],
        "barrel" => [
          1 => "?",
          2 => "?",
        ],
        "grip" => [
          1 => "?",
          2 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
  ],
  "tips" => [

  ],
];

$operators[25] = [
  "name" => "Twitch",
  "fullname" => "Emmanuelle Pichon",
  "position" => "Attacker",
  "fullimage" => "/assets/operators/twitch.png",
  "icon" => "/assets/operators/icons/twitch.png",
  "dob" => "12-10-1988",
  "description" => "Born in the historic town of Nancy, Pichon grew up in a family that valued education, particularly math and science. Early participation in sponsored computer programming competitions led to her joining the army cadets at sixteen. Emmanuelle Pichon is an expert technologist with a penchant for using gadgetry to aid her squad. She enters operations with a small drone capable of delivering disabling electric shocks to hostile forces and their traps.",
  "birthplace" => "Nancy, France",
  "ctu" => "GIGN",
  "ability" => [
    "name" => "RSD Model 1 Shock Drone",
    "description" => "The Shock Drone can scout locations and deliver an electric shock via probes that can incapacitate electrical devices and be used as a distraction toward hostiles. The chassis holds multiple shots.",
    "image" => "/assets/operators/abilities/twitch.png",
  ],
  "weapons" => [
    1 => [
      "name" => "F2",
      "image" => "/assets/operators/weapons/f2.jpg",
      "description" => "Versatile assault rifle used by GIGN for medium to long range, with automatic and burst fire modes.",
      "damage" => [
        "normal" => 39,
        "suppressed" => 33,
      ],
      "magazine" => "30 + 1",
      "rate-of-fire" => 980,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
          4 => "ACOG",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "Vertical Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "417",
      "image" => "/assets/operators/weapons/417.jpg",
      "description" => "Semi-automatic marksman rifle with limited magazine capacity. Favored by GIGN.",
      "damage" => [
        "normal" => 66,
        "suppressed" => 56,
      ],
      "magazine" => "10 + 1",
      "rate-of-fire" => "~300",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Holographic",
          2 => "Reflex",
          3 => "ACOG",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Extended Barrel",
          3 => "Flash Hider",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "Vertical Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "SG-CQB",
      "image" => "/assets/operators/weapons/sgcqb.jpg",
      "description" => "Compact pump action 12-gauge shotgun with close range stopping power. Favored by GIGN.",
      "damage" => [
        "normal" => 50,
        "suppressed" => "?",
      ],
      "magazine" => "7",
      "rate-of-fire" => "~100",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "?",
        ],
        "grip" => [
          1 => "Vertical Grip",
        ],
        "underbarrel" => "laser",
      ],
    ],
    4 => [
      "name" => "P9",
      "image" => "/assets/operators/weapons/p9.jpg",
      "description" => "9mm handgun favored by GIGN. Short to medium range. 16 round magazine.",
      "damage" => [
        "normal" => 45,
        "suppressed" => 38,
      ],
      "magazine" => "16 + 1",
      "rate-of-fire" => "~360",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "?",
          2 => "?",
          3 => "?",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "?",
          2 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    5 => [
      "name" => "LFP586",
      "image" => "/assets/operators/weapons/lfp586.jpg",
      "description" => ".357 magnum revolver, short to medium range handgun, with high stopping power and penetration.",
      "damage" => [
        "normal" => 78,
        "suppressed" => "?",
      ],
      "magazine" => "6",
      "rate-of-fire" => "~360",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "?",
          2 => "?",
          3 => "?",
        ],
        "barrel" => [
          1 => "?",
          2 => "?",
        ],
        "grip" => [
          1 => "?",
          2 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
  ],
  "tips" => [

  ],
];

$operators[26] = [
  "name" => "Rook",
  "fullname" => "Julien Nizan",
  "position" => "Defender",
  "fullimage" => "/assets/operators/rook.png",
  "icon" => "/assets/operators/icons/rook.png",
  "dob" => "06-01-1990",
  "description" => "In school, Nizan excelled at athletics specifically in Track and Field. The youngest son of a working-class family, he enlisted in the Gendarmerie Nationale at eighteen and found himself assigned to the Highway Patrol unit. During basic training, Nizan discovered his aptitude for firearms, a skill that he would continue to develop and master over them during his time with the Gendarmerie Nationale. His skill with a rifle eventually attracted the attention of the GIGN.",
  "birthplace" => "Tours, France",
  "ctu" => "GIGN",
  "ability" => [
    "name" => "R1N 'RHINO' Armor Armor Pack",
    "description" => "Armor plates are stored in a light weight sturdy satcheld for rapid field deployment. A multi-hit boron ceramic plate with a special spall-stop coating, and a back-face deformation (BFD) plate",
    "image" => "/assets/operators/abilities/rook.png",
  ],
  "weapons" => [
    1 => [
      "name" => "P90",
      "image" => "/assets/operators/weapons/p90.jpg",
      "description" => "GIGN high-capacity submachine gun that uses high-velocity ammunition. Best in close quarters.",
      "damage" => [
        "normal" => 21,
        "suppressed" => 17,
      ],
      "magazine" => "50 + 1",
      "rate-of-fire" => 970,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
          4 => "ACOG",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "MP5",
      "image" => "/assets/operators/weapons/mp5.jpg",
      "description" => "Short to medium range submachine gun. High rate of fire and mobility. Favored by GIGN.",
      "damage" => [
        "normal" => 30,
        "suppressed" => 25,
      ],
      "magazine" => "30 + 1",
      "rate-of-fire" => 800,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
          4 => "ACOG",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "Vertical Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "SG-CQB",
      "image" => "/assets/operators/weapons/sgcqb.jpg",
      "description" => "Compact pump action 12-gauge shotgun with close range stopping power. Favored by GIGN.",
      "damage" => [
        "normal" => 50,
        "suppressed" => "?",
      ],
      "magazine" => "7",
      "rate-of-fire" => "~100",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "?",
        ],
        "grip" => [
          1 => "Vertical Grip",
        ],
        "underbarrel" => "laser",
      ],
    ],
    4 => [
      "name" => "P9",
      "image" => "/assets/operators/weapons/p9.jpg",
      "description" => "9mm handgun favored by GIGN. Short to medium range. 16 round magazine.",
      "damage" => [
        "normal" => 45,
        "suppressed" => 38,
      ],
      "magazine" => "16 + 1",
      "rate-of-fire" => "~360",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "?",
          2 => "?",
          3 => "?",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "?",
          2 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    5 => [
      "name" => "LFP586",
      "image" => "/assets/operators/weapons/lfp586.jpg",
      "description" => ".357 magnum revolver, short to medium range handgun, with high stopping power and penetration.",
      "damage" => [
        "normal" => 78,
        "suppressed" => "?",
      ],
      "magazine" => "6",
      "rate-of-fire" => "~360",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "?",
          2 => "?",
          3 => "?",
        ],
        "barrel" => [
          1 => "?",
          2 => "?",
        ],
        "grip" => [
          1 => "?",
          2 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
  ],
  "tips" => [

  ],
];

$operators[27] = [
  "name" => "Doc",
  "fullname" => "Gustave Kateb",
  "position" => "Defender",
  "fullimage" => "/assets/operators/doc.png",
  "icon" => "/assets/operators/icons/doc.png",
  "dob" => "16-09-1977",
  "description" => " Kateb grew up in an affluent family, in Paris’ 16th arrondissement. At twenty, he abandoned a potentially prominent private medical practice in favor of a career with the French Defense Health Service. Gustave Kateb is cut from a rare cloth: a genuine altruist, a true believer in making the world a safer place for his fellow man. A volunteer for Doctors Without Borders and medical officer for the Brigade des Forces Speciales Terre, he is a proficient field medic who carries a Stim Pistol allowing him to revive downed teammates from a distance.",
  "birthplace" => "Paris, France",
  "ctu" => "GIGN",
  "ability" => [
    "name" => "MPD-0 Stim Pistol",
    "description" => "Fires a hypodermic shot to revive himself or teammates from a distance. Can also provide a temporary boost.",
    "image" => "/assets/operators/abilities/doc.png",
  ],
  "weapons" => [
    1 => [
      "name" => "P90",
      "image" => "/assets/operators/weapons/p90.jpg",
      "description" => "GIGN high-capacity submachine gun that uses high-velocity ammunition. Best in close quarters.",
      "damage" => [
        "normal" => 21,
        "suppressed" => 17,
      ],
      "magazine" => "50 + 1",
      "rate-of-fire" => 970,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
          4 => "ACOG",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "MP5",
      "image" => "/assets/operators/weapons/mp5.jpg",
      "description" => "Short to medium range submachine gun. High rate of fire and mobility. Favored by GIGN.",
      "damage" => [
        "normal" => 30,
        "suppressed" => 25,
      ],
      "magazine" => "30 + 1",
      "rate-of-fire" => 800,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
          4 => "ACOG",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "Vertical Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "SG-CQB",
      "image" => "/assets/operators/weapons/sgcqb.jpg",
      "description" => "Compact pump action 12-gauge shotgun with close range stopping power. Favored by GIGN.",
      "damage" => [
        "normal" => 50,
        "suppressed" => "?",
      ],
      "magazine" => "7",
      "rate-of-fire" => "~100",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "?",
        ],
        "grip" => [
          1 => "Vertical Grip",
        ],
        "underbarrel" => "laser",
      ],
    ],
    4 => [
      "name" => "P9",
      "image" => "/assets/operators/weapons/p9.jpg",
      "description" => "9mm handgun favored by GIGN. Short to medium range. 16 round magazine.",
      "damage" => [
        "normal" => 45,
        "suppressed" => 38,
      ],
      "magazine" => "16 + 1",
      "rate-of-fire" => "~360",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "?",
          2 => "?",
          3 => "?",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "?",
          2 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    5 => [
      "name" => "LFP586",
      "image" => "/assets/operators/weapons/lfp586.jpg",
      "description" => ".357 magnum revolver, short to medium range handgun, with high stopping power and penetration.",
      "damage" => [
        "normal" => 78,
        "suppressed" => "?",
      ],
      "magazine" => "6",
      "rate-of-fire" => "~360",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "?",
          2 => "?",
          3 => "?",
        ],
        "barrel" => [
          1 => "?",
          2 => "?",
        ],
        "grip" => [
          1 => "?",
          2 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
  ],
  "tips" => [

  ],
];


/* GSG-9 */

$operators[28] = [
  "name" => "Jager",
  "fullname" => "Marius Streicher",
  "position" => "Defender",
  "fullimage" => "/assets/operators/jager.png",
  "icon" => "/assets/operators/icons/jager.png",
  "dob" => "09-03-1978",
  "description" => "Raised by his uncle who was a mechanic for what later became the Bundespolizei (BPOL) Aviation Group after reunification, Streicher joined BPOL as a helicopter technician. He began designing defensive weapon systems, including a ground-based Active Defense System (ADS) prototype that caught the attention of the GSG-9. A veteran of the GSG-9 anti-piracy ops in the Indian Ocean, he was later recruited to Team Rainbow.",
  "birthplace" => "Düsseldorf, Germany",
  "ctu" => "GSG-9",
  "ability" => [
    "name" => "ADS-MK IV 'MAGPIE' Active Defense",
    "description" => "Uses an Active Defense system to intercept grenades before they detonate.",
    "image" => "/assets/operators/abilities/jager.png",
  ],
  "weapons" => [
    1 => [
      "name" => "416-C Carbine",
      "image" => "/assets/operators/weapons/416c.jpg",
      "description" => "GSG 9 medium range 5.56x45mm caliber assault rifle, with high recoil and rate of fire.",
      "damage" => [
        "normal" => 42,
        "suppressed" => 35,
      ],
      "magazine" => "30 + 1",
      "rate-of-fire" => 740,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
          5 => "Extended Barrel",
        ],
        "grip" => [
          1 => "Vertical Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "M870",
      "image" => "/assets/operators/weapons/m870.jpg",
      "description" => "12-gauge pump action shotgun. Favored by GSG 9. Large barrel allows for enhanced range.",
      "damage" => [
        "normal" => 60,
        "suppressed" => "?",
      ],
      "magazine" => "7",
      "rate-of-fire" => "~120",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "?",
        ],
        "grip" => [
          1 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "P12",
      "image" => "/assets/operators/weapons/p12.jpg",
      "description" => "45 caliber semi-automatic pistol that has low recoil, best used in mid-range combat.",
      "damage" => [
        "normal" => 43,
        "suppressed" => 36,
      ],
      "magazine" => "15 + 1",
      "rate-of-fire" => "~420",
      "mobility" => 50,
      "attachments" => [
        "sights" => "?",
        "barrel" => [
          1 => "suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => "?",
        "underbarrel" => "laser",
      ],
    ],
  ],
  "tips" => [

  ],
];

$operators[29] = [
  "name" => "Bandit",
  "fullname" => "Dominic Brunsmeier",
  "position" => "Defender",
  "fullimage" => "/assets/operators/bandit.png",
  "icon" => "/assets/operators/icons/bandit.png",
  "dob" => "13-08-1974",
  "description" => "A former undercover agent within the Hannover Hells Angels, Brunsmeier is known for taking obsolete items and repurposing them into weapons. He has cobbled together a device that can electrify barbed wires and barricades, and injure or destroy anything that comes into contact with it.",
  "birthplace" => "Berlin, Germany",
  "ctu" => "GSG-9",
  "ability" => [
    "name" => "CED-1 (Crude Electrical Device) Shock Wire",
    "description" => "Sets high-tension Shock wire on metallic gadgets, dealing damage to enemies.",
    "image" => "/assets/operators/abilities/jager.png",
  ],
  "weapons" => [
    1 => [
      "name" => "MP7",
      "image" => "/assets/operators/weapons/mp7.jpg",
      "description" => "Close to mid-range submachine gun with high penetration. Favored by GSG 9.",
      "damage" => [
        "normal" => 32,
        "suppressed" => 28,
      ],
      "magazine" => "30 + 1",
      "rate-of-fire" => 900,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "M870",
      "image" => "/assets/operators/weapons/m870.jpg",
      "description" => "12-gauge pump action shotgun. Favored by GSG 9. Large barrel allows for enhanced range.",
      "damage" => [
        "normal" => 60,
        "suppressed" => "?",
      ],
      "magazine" => "7",
      "rate-of-fire" => "~120",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "?",
        ],
        "grip" => [
          1 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "P12",
      "image" => "/assets/operators/weapons/p12.jpg",
      "description" => "45 caliber semi-automatic pistol that has low recoil, best used in mid-range combat.",
      "damage" => [
        "normal" => 43,
        "suppressed" => 36,
      ],
      "magazine" => "15 + 1",
      "rate-of-fire" => "~420",
      "mobility" => 50,
      "attachments" => [
        "sights" => "?",
        "barrel" => [
          1 => "suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => "?",
        "underbarrel" => "laser",
      ],
    ],
  ],
  "tips" => [

  ],
];

$operators[30] = [
  "name" => "IQ",
  "fullname" => "Monika Weiss",
  "position" => "Attacker",
  "fullimage" => "/assets/operators/iq.png",
  "icon" => "/assets/operators/icons/iq.png",
  "dob" => "01-08-1979",
  "description" => "A brilliant overachiever and a fast learner, Monika Weiss is a natural at almost everything she tries. With an Ivy League education in electrical engineering and service in GSG9's technical testing and airborne units, she uses a device which detects electronic traps and gadgets at a distance.",
  "birthplace" => "Leipzig, Germany",
  "ctu" => "GSG-9",
  "ability" => [
    "name" => "RED MKIII 'Spectre' Electronics Detector",
    "description" => "The RED Mk III 'Spectre', which can locate any electronic device in the immediate vicinity.",
    "image" => "/assets/operators/abilities/iq.png",
  ],
  "weapons" => [
    1 => [
      "name" => "AUG-A2",
      "image" => "/assets/operators/weapons/aug.jpg",
      "description" => "GSG 9's medium to long range assault rifle. Capable of firing 720 rounds/min.",
      "damage" => [
        "normal" => 41,
        "suppressed" => 34,
      ],
      "magazine" => "30 + 1",
      "rate-of-fire" => 720,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
          4 => "ACOG",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
        ],
        "grip" => [
          1 => "?",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "552-Commando",
      "image" => "/assets/operators/weapons/552.jpg",
      "description" => "Medium range carbine, 30 round magazine, medium penetration at optimal range, 690 rounds/min.",
      "damage" => [
        "normal" => 47,
        "suppressed" => 39,
      ],
      "magazine" => "30 + 1",
      "rate-of-fire" => 690,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
          4 => "ACOG",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "G8A1",
      "image" => "/assets/operators/weapons/g8a1.jpg",
      "description" => "GSG 9 LMG, accurate in short range. Capable of long range controlled fire.",
      "damage" => [
        "normal" => 37,
        "suppressed" => 31,
      ],
      "magazine" => "50 + 1",
      "rate-of-fire" => 850,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
          4 => "ACOG",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
        ],
        "grip" => "Verical Grip",
        "underbarrel" => "laser",
      ],
    ],
    4 => [
      "name" => "P12",
      "image" => "/assets/operators/weapons/p12.jpg",
      "description" => "45 caliber semi-automatic pistol that has low recoil, best used in mid-range combat.",
      "damage" => [
        "normal" => 43,
        "suppressed" => 36,
      ],
      "magazine" => "15 + 1",
      "rate-of-fire" => "~420",
      "mobility" => 50,
      "attachments" => [
        "sights" => "?",
        "barrel" => [
          1 => "suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => "?",
        "underbarrel" => "laser",
      ],
    ],
  ],
  "tips" => [

  ],
];

$operators[31] = [
  "name" => "Blitz",
  "fullname" => "Elias Kötz",
  "position" => "Attacker",
  "fullimage" => "/assets/operators/blitz.png",
  "icon" => "/assets/operators/icons/blitz.png",
  "dob" => "02-04-1980",
  "description" => "A student of Hermann-Böse-Gymnasium, Kötz excelled academically and as a sportsman in the HBG's bilingual program. His imposing physique made him an exceptional athlete, he carried his experience on the field into his military training. His jovial nature and academic background eased the transition from a Schnelle Kräfte soldier in Kosovo to a member of GSG 9. Kötz was integral to establishing an anti-terrorism unit in India following the 2008 attack in Mumbai.",
  "birthplace" => "Bremen, Germany",
  "ctu" => "GSG-9",
  "ability" => [
    "name" => "G52-Tactical Light Shield",
    "description" => "The G52 has a band of extremely powerful flashbang grade lights attached to the front. This allows him to blind enemies in front of the shield, enabling him to get the advantage and push forwards. However, there are only five charges for the flash, preventing extended use.",
    "image" => "/assets/operators/abilities/blitz.png",
  ],
  "weapons" => [
    1 => [
      "name" => "G52-Tactical Light Shield",
      "image" => "/assets/operators/weapons/g52.jpg",
      "description" => "The G52 has a band of extremely powerful flashbang grade lights attached to the front.",
      "damage" => [
        "normal" => "?",
        "suppressed" => "?",
      ],
      "magazine" => "?",
      "rate-of-fire" => "?",
      "mobility" => 30,
      "attachments" => [
        "sights" => [
          1 => "?",
        ],
        "barrel" => [
          1 => "?",
        ],
        "grip" => [
          1 => "?",
        ],
        "underbarrel" => [
          1 => "?",
        ],
      ],
    ],
    2 => [
      "name" => "P12",
      "image" => "/assets/operators/weapons/p12.jpg",
      "description" => "45 caliber semi-automatic pistol that has low recoil, best used in mid-range combat.",
      "damage" => [
        "normal" => 43,
        "suppressed" => 36,
      ],
      "magazine" => "15 + 1",
      "rate-of-fire" => "~420",
      "mobility" => 50,
      "attachments" => [
        "sights" => "?",
        "barrel" => [
          1 => "suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => "?",
        "underbarrel" => "laser",
      ],
    ],
  ],
  "tips" => [

  ],
];

/* Spetsnaz Operators */

$operators[32] = [
  "name" => "Fuze",
  "fullname" => "Shuhrat Kessikbayev",
  "position" => "Attacker",
  "fullimage" => "/assets/operators/fuze.png",
  "icon" => "/assets/operators/icons/fuze.png",
  "dob" => "12-10-1982",
  "description" => "Kessikbayev grew up in a military family in Samarkand, Uzbekistan. After his family emigrated to Russia shortly before the collapse of the Soviet Union, Kessikbayev followed in his father's footsteps and enrolled in the military, where his facility with technology landed him a spot in the coveted weapon testing brigade at Alabino firing range near Moscow.",
  "birthplace" => "Samarkand, Uzbekistan",
  "ctu" => "Septsnaz",
  "ability" => [
    "name" => "Cluster Charge APM-6 'Matryoshka'",
    "description" => "First developed in the Ratnik experimental weaponry brigade, the APM-6 \"Matryoshka\" was Kessikbayev’s attempt to create a more powerful breach charge. It proved to be an effective means of clearing a room, dealing the most damage to hostiles while keeping the Operator relatively safe. The \"Matryoshka\" can be anchored either vertically or horizontally. Once deployed, the piston burrows through walls or floors, dispersing live cluster grenades while spinning to deal the most damage from any directions.",
    "image" => "/assets/operators/abilities/fuze.png",
  ],
  "weapons" => [
    1 => [
      "name" => "Ballistic Shield",
      "image" => "/assets/operators/weapons/ballisticshield.jpg",
      "description" => "",
      "damage" => [
        "normal" => "?",
        "suppressed" => "?",
      ],
      "magazine" => "?",
      "rate-of-fire" => "?",
      "mobility" => 30,
      "attachments" => [
        "sights" => [
          1 => "?",
        ],
        "barrel" => [
          1 => "?",
        ],
        "grip" => [
          1 => "?",
        ],
        "underbarrel" => [
          1 => "?",
        ],
      ],
    ],
    2 => [
      "name" => "6P41",
      "image" => "/assets/operators/weapons/6p41.jpg",
      "description" => "Spetsnaz LMG, accurate in short to medium range. Capable of long range controlled fire.",
      "damage" => [
        "normal" => 47,
        "suppressed" => 39,
      ],
      "magazine" => "100",
      "rate-of-fire" => 680,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
          4 => "ACOG",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
        ],
        "grip" => [
          1 => "Vertical Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "AK-12",
      "image" => "/assets/operators/weapons/ak12.jpg",
      "description" => "Medium range assault rifle, medium to high stopping power based on caliber. Used by Spetznaz.",
      "damage" => [
        "normal" => 44,
        "suppressed" => 37,
      ],
      "magazine" => "30 + 1",
      "rate-of-fire" => 850,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
          4 => "ACOG",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "Vertical",
          2 => "Angled",
        ],
        "underbarrel" => "laser",
      ],
    ],
    4 => [
      "name" => "PMM",
      "image" => "/assets/operators/weapons/pmm.jpg",
      "description" => "9mm short range hand gun with high stopping power, favored by Spetsnaz.",
      "damage" => [
        "normal" => 63,
        "suppressed" => 53,
      ],
      "magazine" => "8 + 1",
      "rate-of-fire" => "~420",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "?",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "?",
        ],
        "underbarrel" => "laser",
      ],
    ],
    5 => [
      "name" => "GSh-18",
      "image" => "/assets/operators/weapons/gsh18.jpg",
      "description" => "Spetsnaz 9mm short range semi-automatic pistol, with low recoil and low damage.",
      "damage" => [
        "normal" => 33,
        "suppressed" => 28,
      ],
      "magazine" => "18 + 1",
      "rate-of-fire" => "~360",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "?",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Compensator",
          3 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "?",
        ],
        "underbarrel" => "?",
      ],
    ],
  ],
  "tips" => [

  ],
];

/* Empty Operator
*
$operators[005] = [
  "name" => "",
  "fullname" => "",
  "position" => "",
  "fullimage" => "/assets/operators/.png",
  "icon" => "/assets/operators/icons/.png",
  "dob" => "",
  "description" => "",
  "birthplace" => "",
  "ctu" => "",
  "ability" => [
    "name" => "",
    "description" => "",
    "image" => "/assets/operators/abilities/.png",
  ],
  "weapons" => [
    1 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 28,
        "suppressed" => 23,
      ],
      "magazine" => "50 + 1",
      "rate-of-fire" => 1080,
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Flash Hider",
          3 => "Compensator",
          4 => "Muzzle Brake",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    2 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 35,
        "suppressed" => 29,
      ],
      "magazine" => "10 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => [
          1 => "Red Dot",
          2 => "Holographic",
          3 => "Reflex",
        ],
        "barrel" => [
          1 => "Suppressor",
          2 => "Extended Barrel",
        ],
        "grip" => [
          1 => "Vertical Grip",
          2 => "Angled Grip",
        ],
        "underbarrel" => [
          1 => "Laser",
        ],
      ],
    ],
    3 => [
      "name" => "",
      "image" => "/assets/operators/weapons/.jpg",
      "description" => "",
      "damage" => [
        "normal" => 38,
        "suppressed" => 32,
      ],
      "magazine" => "15 + 1",
      "rate-of-fire" => "?",
      "mobility" => 50,
      "attachments" => [
        "sights" => "?",
        "barrel" => [
          1 => "suppressor",
          2 => "Muzzle Brake",
        ],
        "grip" => "?",
        "underbarrel" => "laser",
      ],
    ],
  ],
  "tips" => [

  ],
];
*/
?>
